<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp_accountingRequest;
use App\Http\Requests\UpdateDp_accountingRequest;
use App\Models\Dp_accounting;

class DpAccountingController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDp_accountingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDp_accountingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dp_accounting  $dp_accounting
     * @return \Illuminate\Http\Response
     */
    public function show(Dp_accounting $dp_accounting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dp_accounting  $dp_accounting
     * @return \Illuminate\Http\Response
     */
    public function edit(Dp_accounting $dp_accounting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDp_accountingRequest  $request
     * @param  \App\Models\Dp_accounting  $dp_accounting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDp_accountingRequest $request, Dp_accounting $dp_accounting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dp_accounting  $dp_accounting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dp_accounting $dp_accounting)
    {
        //
    }
}
