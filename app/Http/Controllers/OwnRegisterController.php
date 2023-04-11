<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOwnRegisterRequest;
use App\Http\Requests\UpdateOwnRegisterRequest;
use App\Models\OwnRegister;
use Illuminate\Http\Request;


class OwnRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // バリデーションを行う
        $request->validate([
            'OwnerName' => 'required|string|max:255',
            'Memo' => 'nullable|string',
            'Stance' => 'required|in:0,1',
            'RegisteredTransfer' => 'nullable|date',
            'BukkenID' => 'required',
            'Register' => 'required',
        ]);

        // 新しいオーナー情報を作成する
        $owner = new OwnRegister();
        $owner->OwnerName = $request->input('OwnerName');
        $owner->Memo = $request->input('Memo');
        $owner->Stance = $request->input('Stance');
        $owner->RegisteredTransfer = $request->input('RegisteredTransfer');
        $owner->BukkenID = $request->input('BukkenID');
        $owner->Register = $request->input('Register');
        $owner->save();

        $id = $request->input('id');

        // 登録後にリダイレクトする
        return redirect(route('property_detail', ['id' => $id]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreOwnRegisterRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOwnRegisterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\OwnRegister $ownRegister
     * @return \Illuminate\Http\Response
     */
    public function show(OwnRegister $ownRegister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\OwnRegister $ownRegister
     * @return \Illuminate\Http\Response
     */
    public function edit(OwnRegister $ownRegister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateOwnRegisterRequest $request
     * @param \App\Models\OwnRegister $ownRegister
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOwnRegisterRequest $request)
    {
        // ブログのデータを受け取る
        $inputs = $request->all();


//        ddd($inputs);
        \DB::beginTransaction();

        try {
            $owner = OwnRegister::find($inputs['id']);

            $owner->fill([
                'BukkenID' => $inputs['BukkenID'],
                'OwnerName' => $inputs['OwnerName'],
                'Register' => $inputs['Register'],
                'Memo' => $inputs['Memo'],
                'Stance' => $inputs['Stance'],
                'RegisteredTransfer' => $inputs['RegisteredTransfer']
            ]);

            $owner->save();


            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollback();
            report($e);

//        abort(500);
        }

        return redirect(route('property_detail', ['id' => $inputs['id']]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\OwnRegister $ownRegister
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $ownRegister = OwnRegister::find($id);
        $ownRegister->delete();
        return redirect(route('property_detail', ['id' => $request->input('uid')]));
    }
}
