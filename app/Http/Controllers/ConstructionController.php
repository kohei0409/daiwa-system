<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreconstructionRequest;
use App\Http\Requests\UpdateconstructionRequest;
use App\Models\Construction;
use App\Models\Property;
use App\Models\Manufacturers;
use App\Models\Tool;

use App\Http\Requests\ToolRequest;
use Illuminate\Http\Request;


class ConstructionController extends Controller
{
    //
    public function showlist()
    {

        $properties = Property::all();
        $manufacturers = Manufacturers::all();
        $constructions = Construction::orderBy('construction_id', 'desc')->get();
        $tools = Tool::all();


        return view('construction.list', ['properties' => $properties, 'manufacturers' => $manufacturers, 'constructions' => $constructions, 'tools' => $tools]);

    }


    public function exeStore(BookletRequest $request)
    {

        $inputs = $request->all();
//            dd($inputs);

        \DB::beginTransaction();
        try {


            Booklet::create($inputs);
            \DB::commit();
        } catch (\Throwable $e) {


            \DB::rollBack();
            abort(500);

        }

        \Session::flush('erro_msg', '登録されました。');
        return redirect('https://daiwa-housing.jp/db/list/construction?get_month=all&&select_position=');
    }

    public function exeStorecon(BookletRequest $request)
    {

        $inputs = $request->all();


        \DB::beginTransaction();
        try {
//            dd($inputs);

            Booklet::create($inputs);
            \DB::commit();
        } catch (\Throwable $e) {


            \DB::rollBack();
            abort(500);

        }

        $url = 'https://daiwa-housing.jp/db/list/contractors?get_month=' . $inputs['construction_select'] . '&&select_position=';
        return redirect($url);
    }


    public function showEdit($id)
    {
        $construction = Booklet::find($id);
        $properties = Property::all();
        $contractors = Contractor::all();
        $tools = Tool::all();

        if (is_null($construction)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect('https://daiwa-housing.jp/db/list/construction?get_month=all&&select_position=');
        }

        return view('construction.edit', ['construction' => $construction, 'properties' => $properties, 'contractors' => $contractors, 'tools' => $tools]);
    }


    public function showEditDetail($id)
    {
        $construction = Booklet::find($id);
        $properties = Property::all();
        $contractors = Contractor::all();
        $tools = Tool::all();

        if (is_null($construction)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect('https://daiwa-housing.jp/db/list/construction?get_month=all&&select_position=');
        }

        return view('construction.edit_detail', ['construction' => $construction, 'properties' => $properties, 'contractors' => $contractors, 'tools' => $tools]);
    }


    public function exeUpdate(BookletRequest $request)
    {
        // ブログのデータを受け取る
        $inputs = $request->all();

        \DB::beginTransaction();
        try {
            // ブログを更新
            $blog = Booklet::find($inputs['id']);
            $blog->fill([
                'construction_select' => $inputs['construction_select'],
                'constructions_input' => $inputs['constructions_input'],
                'constructions_id' => $inputs['constructions_id'],
                'construction_name' => $inputs['construction_name'],
                'constructions_category' => $inputs['constructions_category'],
                'constructions_contractor' => $inputs['constructions_contractor'],
                'construction_detail' => $inputs['construction_detail'],
                'construction_number' => $inputs['construction_number'],
                'construction_unit' => $inputs['construction_unit'],
                'construction_price' => $inputs['construction_price'],
                'construction_etc' => $inputs['construction_etc'],
                'construction_process_001' => $inputs['construction_process_001'],
                'construction_process_002' => $inputs['construction_process_002'],
                'construction_process_003' => $inputs['construction_process_003']

            ]);
            $blog->save();
            \DB::commit();
        } catch (\Throwable $e) {


            \DB::rollback();
            abort(500);
        }

        \Session::flash('err_msg', 'ブログを更新しました');
        return redirect('https://daiwa-housing.jp/db/list/construction?get_month=all&&select_position=');
    }


    public function exeDelete($id)
    {
        if (empty($id)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect('https://daiwa-housing.jp/db/list/construction?get_month=all&&select_position=');
        }

        try {
            // ブログを削除
            Booklet::destroy($id);
        } catch (\Throwable $e) {
            abort(500);
        }

        \Session::flash('err_msg', '削除しました。');
        return redirect('https://daiwa-housing.jp/db/list/construction?get_month=all&&select_position=');
    }


}

