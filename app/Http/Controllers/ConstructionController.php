<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConstructionRequest;
use App\Http\Requests\UpdateStoreConstructionRequest;
use App\Models\Construction;
use App\Models\Property;
use App\Models\Tool;
use App\Models\Manufacturers;


class ConstructionController extends Controller
{
    //
    public function showlist()
    {
        $constructions = Construction::all();
        $properties = Property::all();
        $manufacturers = Manufacturers::all();
        $details = Construction::all();
        $tools = Tool::all();


        return view('construction.list', ['constructions' => $constructions, 'properties' => $properties, 'manufacturers' => $manufacturers, 'tools' => $tools, 'details' => $details]);

    }


    public function exeStore(StoreConstructionRequest $request)
    {

        $inputs = $request->all();

//        dd($inputs);

        \DB::beginTransaction();
        try {


            Construction::create($inputs);
            \DB::commit();
        } catch (\Throwable $e) {


            \DB::rollBack();
            dd($e->getMessage());
            abort(500);

        }
        $constructions = Construction::all();
        $properties = Property::all();
        $manufacturers = Manufacturers::all();
        $details = Construction::all();
        $tools = Tool::all();


        return view('construction.list', ['constructions' => $constructions, 'properties' => $properties, 'manufacturers' => $manufacturers, 'tools' => $tools, 'details' => $details]);
    }


    public function showlist_test()
    {
        $constructions = Construction::all();
        $properties = Property::all();
        $manufacturers = Manufacturers::all();
        $tools = Tool::all();


        return view('construction.list_test', ['constructions' => $constructions, 'properties' => $properties, 'manufacturers' => $manufacturers, 'tools' => $tools]);

    }


    public function exeStorecon(StoreConstructionRequest $request)
    {

        $inputs = $request->all();


        \DB::beginTransaction();
        try {
//            dd($inputs);

            Construction::create($inputs);
            \DB::commit();
        } catch (\Throwable $e) {


            \DB::rollBack();
            abort(500);

        }

        $url = 'https://daiwa-housing.jp/dhs/system/manufacturers?get_month=' . $inputs['construction_select'] . '&&select_position=';
        return redirect($url);
    }


    public function showEdit($id)
    {
        $construction = Construction::find($id);
        $properties = Property::all();
        $manufacturers = Manufacturers::all();
        $tools = Tool::all();

        if (is_null($construction)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect('https://daiwa-housing.jp/dhs/system/construction?get_month=all&&select_position=');
        }

        return view('construction.edit', ['construction' => $construction, 'properties' => $properties, 'manufacturers' => $manufacturers, 'tools' => $tools]);
    }


    public function showEditDetail($id)
    {
        $construction = Construction::find($id);
        $properties = Property::all();
        $manufacturers = Manufacturers::all();
        $tools = Tool::all();

        if (is_null($construction)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect('https://daiwa-housing.jp/dhs/system/construction?get_month=all&&select_position=');
        }

        return view('construction.edit_detail', ['construction' => $construction, 'properties' => $properties, 'manufacturers' => $manufacturers, 'tools' => $tools]);
    }


    public function exeUpdate(UpdateStoreConstructionRequest $request)
    {
        // ブログのデータを受け取る
        $inputs = $request->all();

        \DB::beginTransaction();
        try {
            // ブログを更新
            $blog = Construction::find($inputs['id']);
            $blog->fill([
                'construction_select' => $inputs['construction_select'],
                'construction_input' => $inputs['construction_input'],
                'construction_id' => $inputs['construction_id'],
                'construction_name' => $inputs['construction_name'],
                'construction_manufacturer' => $inputs['construction_manufacturer'],
                'construction_category' => $inputs['construction_category'],
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
        return redirect('https://daiwa-housing.jp/dhs/system/construction?get_month=all&&select_position=');
    }


    public function exeDelete($id)
    {
        if (empty($id)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect('https://daiwa-housing.jp/dhs/system/construction?get_month=all&&select_position=');
        }

        try {
            // ブログを削除
            Construction::destroy($id);
        } catch (\Throwable $e) {
            abort(500);
        }

        \Session::flash('err_msg', '削除しました。');
        return redirect('https://daiwa-housing.jp/dhs/system/construction?get_month=all&&select_position=');
    }


}

