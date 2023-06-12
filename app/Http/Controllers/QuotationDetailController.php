<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuotation_detailRequest;
use App\Http\Requests\UpdateQuotation_detailRequest;
use App\Models\Quotation_detail;

class QuotationDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreQuotation_detailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuotation_detailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quotation_detail  $quotation_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Quotation_detail $quotation_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quotation_detail  $quotation_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Quotation_detail $quotation_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuotation_detailRequest  $request
     * @param  \App\Models\Quotation_detail  $quotation_detail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuotation_detailRequest $request, Quotation_detail $quotation_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quotation_detail  $quotation_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quotation_detail $quotation_detail)
    {
        //
    }
}
