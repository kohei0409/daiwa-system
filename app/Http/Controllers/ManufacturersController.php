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

        $manufacturers = Manufacturers::all();

        return view('manufacturers.list', ['manufacturers' => $manufacturers]);


    }

    public function addCreate()
    {
        return view('manufacturers.form');
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
        return view('manufacturers.detail', ['manufacturers' => $manufacturers, ['property_list' => $property_list]]);

    }


public function exeStore(StoremanufacturersRequest $request)
{
    \DB::beginTransaction();
    try {
        $inputs = $request->all();
        logger()->debug('Form data:', $inputs);
        Manufacturers::create($inputs);
        \DB::commit();
    } catch (\Throwable $e) {
        \DB::rollBack();
        // abort(500);
        throw $e;
    }
    $manufacturers = Manufacturers::all();

    return view('manufacturers.list', ['manufacturers' => $manufacturers]);
}


    public function showEdit($id)
    {
        $manufacturer = Manufacturers::find($id);


        return view('manufacturers.edit', ['manufacturer' => $manufacturer]);
    }


    public function exeUpdate(UpdatemanufacturersRequest $request)
    {
        // ブログのデータを受け取る
        $inputs = $request->all();
        \DB::beginTransaction();
        try {
            $set = Manufacturers::find($inputs['id']);
            $set->fill([
                'manufacturers_id' => $inputs['manufacturers_id'],
                'manufacturers_name' => $inputs['manufacturers_name'],
                'manufacturers_post' => $inputs['manufacturers_post'],
                'manufacturers_address' => $inputs['manufacturers_address'],
                'manufacturers_tel' => $inputs['manufacturers_tel']
            ]);
            $set->save();
            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollback();
            abort(500);
        }

        return redirect(route('manufacturers'));
    }

    public function exeDelete($id)
    {
        if (empty($id)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('manufacturers'));
        }

        try {
            // ブログを削除
            Manufacturers::destroy($id);
        } catch (\Throwable $e) {
            abort(500);
        }

        \Session::flash('err_msg', '削除しました。');
        return redirect(route('manufacturers'));
    }


}
