<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp_assessmentRequest;
use App\Http\Requests\UpdateDp_assessmentRequest;
use App\Models\Dp_assessment;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Estimate_list;


class DpAssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dp_assessment.index');
    }

    public function list()
    {
        $property_list = Dp_assessment::where('Property_status', '査定中')
            ->orderBy('id', 'desc')
            ->get();

        $property_list_2 = Dp_assessment::where(function ($query) {
            $query->where('Property_status', '見積もり依頼')
                ->orWhere('Property_status', '見積もり完了');
        })
            ->orderBy('id', 'desc')
            ->get();

        $folderNames = $property_list->pluck('Property_id')->toArray();

        // ファイル一覧を格納する配列を初期化
        $files = [];

        // 各フォルダーごとにファイル一覧を取得
        foreach ($folderNames as $folderName) {
            $folderPath = storage_path('public/uploads/' . $folderName);
            $folderFiles = Storage::files('public/uploads/' . $folderName);
            $files[$folderName] = $folderFiles;
        }

        $estimate_list = Estimate_list::orderBy('id', 'desc')->get();


        return view('dp_assessment.list', compact('property_list', 'property_list_2', 'estimate_list', 'files'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function input()
    {
        return view('dp_assessment.input');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();

        \DB::beginTransaction();
        try {
            // 重複登録チェック
            $existingData = Dp_assessment::where('property_bukkenid', $inputs['property_bukkenid'])->exists();

            if ($existingData) {
                // 既に同じデータが存在する場合の処理
                \DB::rollBack();
                return redirect()->back()->with('error', '既に同じデータが存在します。');
            }

            // データ登録
            Dp_assessment::create($inputs);
            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollBack();
            return redirect()->back()->with('error', 'データの登録に失敗しました。');
        }

        $property_list = Dp_assessment::where('Property_status', '査定中')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('dp_assessment.list', ['property_list' => $property_list]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function estimate(Request $request)
    {
        $inputs = $request->all();

        \DB::beginTransaction();
        try {
            // 重複登録チェック
            $existingData = Estimate_list::where('estimate_code', $inputs['estimate_code'])->exists();

            if ($existingData) {
                // 既に同じデータが存在する場合の処理
                \DB::rollBack();
                return redirect()->back()->with('error', '既に同じデータが存在します。');
            }

            // データ登録
            Estimate_list::create($inputs);
            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollBack();
            return redirect()->back()->with('error', 'データの登録に失敗しました。');
        }

        $property_list = Dp_assessment::where('Property_status', '査定中')
            ->orderBy('id', 'desc')
            ->get();

        $property_list_2 = Dp_assessment::where(function ($query) {
            $query->where('Property_status', '見積もり依頼')
                ->orWhere('Property_status', '見積もり完了');
        })
            ->orderBy('id', 'desc')
            ->get();

        $folderNames = $property_list->pluck('Property_id')->toArray();

        // ファイル一覧を格納する配列を初期化
        $files = [];

        // 各フォルダーごとにファイル一覧を取得
        foreach ($folderNames as $folderName) {
            $folderPath = storage_path('public/uploads/' . $folderName);
            $folderFiles = Storage::files('public/uploads/' . $folderName);
            $files[$folderName] = $folderFiles;
        }

        $estimate_list = Estimate_list::orderBy('id', 'desc')->get();


        return view('dp_assessment.list', compact('property_list', 'property_list_2', 'estimate_list', 'files'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('dp_assessment.edit');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        return view('dp_assessment.update');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        return view('dp_assessment.destroy');
    }


    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $customFileName = $request->input('sub_folder_name')  . '_' . date('Y-m-d-His') . '_' . $request->input('filename') . '.' . $file->getClientOriginalExtension();
            $folderName = $request->input('folder_name');
            $filePath = $file->storeAs('uploads/' . $folderName, $customFileName, 'public');
            $page_upload = $request->input('page_upload');
            $url = '/dp_assessment_list?tabs=1&&cals=12&&page_upload=' . $page_upload;
        }

        return redirect($url);


    }


    public function fileRename($folderName, $fileName, Request $request)
    {
        $newFileName = $request->input('newFileName');
        $filePath = storage_path('app/public/uploads/' . $folderName . '/' . $fileName);
        $newFilePath = storage_path('app/public/uploads/' . $folderName . '/' . $newFileName);

        // ファイル名を変更する
        if (file_exists($filePath)) {
            rename($filePath, $newFilePath);
        }

        return redirect()->back()->with('success', 'ファイル名が変更されました。');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {

        $property = Dp_assessment::find($id);


        return view('dp_assessment.estimate_detail', ['property' => $property]);

    }


}
