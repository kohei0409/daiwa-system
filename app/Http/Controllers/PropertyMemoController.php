<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropertyMemoRequest;
use App\Http\Requests\UpdatePropertyMemoRequest;
use App\Models\PropertyMemo;
use Illuminate\Http\Request;


class PropertyMemoController extends Controller
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
        $memo = new PropertyMemo();
        $memo->BukkenID = $request->input('BukkenID');
        $memo->Memo = $request->input('Memo');
        $memo->Manager = $request->input('Manager');
        $memo->Register = $request->input('Register');
        $memo->save();

return redirect()->route('property_detail', ['id' => $request->input('id'), 'tabs' => $request->input('tabs')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StorePropertyMemoRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyMemoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\PropertyMemo $propertyMemo
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyMemo $propertyMemo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\PropertyMemo $propertyMemo
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyMemo $propertyMemo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdatePropertyMemoRequest $request
     * @param \App\Models\PropertyMemo $propertyMemo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyMemoRequest $request, PropertyMemo $propertyMemo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\PropertyMemo $propertyMemo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyMemo $propertyMemo)
    {
        //
    }
}
