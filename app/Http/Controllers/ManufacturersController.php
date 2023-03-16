<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoremanufacturersRequest;
use App\Http\Requests\UpdatemanufacturersRequest;
use App\Models\Manufacturers;
use App\Models\Property;

class ManufacturersController extends Controller
{


    public function showList()
    {
//        $booklets = Booklet::all();
//        $properties = Property::all();
        $manufacturers = Manufacturers::all();
//        $details = Booklet::all();
//        $tools = Tool::all();
//        return view('contractor.list', ['booklets' => $booklets, 'properties' => $properties, 'contractors' => $contractors, 'tools' => $tools, 'details' => $details]);


        return view('manufacturers.list', ['manufacturers' => $manufacturers]);


    }


    public function showDetail($id)
    {
        $manufacturers = manufacturers::find($id);
        $property_list = Property::all();
//        $tools = Tool::all();


        if (is_null($manufacturers)) {
            \Session::flush('erro_msg', 'データーがありません。');
            return redirect(route('manufacturers'));
        }
//        return view('manufacturers.detail', ['booklets' => $booklets, 'contractor' => $manufacturers, 'tools' => $tools]);
        return view('manufacturers.detail', ['manufacturers' => $manufacturers,['property_list' => $property_list]]);

    }



    public function showCreate()
    {
        $booklets = manufacturers::all();
        return view('manufacturers.form');
    }

    public function exeStore(ContractorRequest $request)
    {

        $inputs = $request->all();


        \DB::beginTransaction();
        try {
            manufacturers::create($inputs);
            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollBack();
            abort(500);

        }

        \Session::flush('erro_msg', '登録されました。');
        return redirect('https://www.daiwa-housing.co.jp/db/contractor');
    }


    public function showEdit($id)
    {
        $manufacturers = manufacturers::find($id);

        if (is_null($manufacturers)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('contractors'));
        }

        return view('manufacturers.edit', ['contractor' => $manufacturers]);
    }


    public function exeUpdate(ContractorRequest $request)
    {
        // ブログのデータを受け取る
        $inputs = $request->all();

        \DB::beginTransaction();
        try {
            // ブログを更新
            $blog = manufacturers::find($inputs['id']);
            $blog->fill([
                'contractor_id' => $inputs['contractor_id'],
                'contractor_name' => $inputs['contractor_name'],
                'contractor_post' => $inputs['contractor_post'],
                'contractor_address' => $inputs['contractor_address'],
                'contractor_tel' => $inputs['contractor_tel']
            ]);
            $blog->save();
            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollback();
            abort(500);
        }

        return redirect(route('contractors'));
    }

    public function exeDelete($id)
    {
        if (empty($id)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('contractors'));
        }

        try {
            // ブログを削除
            manufacturers::destroy($id);
        } catch (\Throwable $e) {
            abort(500);
        }

        \Session::flash('err_msg', '削除しました。');
        return redirect(route('contractors'));
    }


}
