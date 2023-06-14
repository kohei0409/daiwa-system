<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp_constructionRequest;
use App\Http\Requests\UpdateDp_constructionRequest;
use App\Models\Dp_construction;
use App\Models\Property;
use App\Models\Construction;
use App\Models\Tool;
use App\Models\Manufacturers;
use Illuminate\Http\Request;
use App\Models\Quotation;

class DpConstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $property_list = Property::where('Property_status', '査定中')
            ->orderBy('id', 'desc')
            ->get();


        return view('dp_construction.index', compact('property_list'));


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {

        $query = Property::all();
        $property_list = Property::where('Property_status', '工事中')
            ->orderBy('created_at', 'desc')
            ->get();


        return view('dp_construction.list', ['property_list' => $property_list]);

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function estimate()
    {

     $property_list = Property::where(function ($query) {
            $query->where('Property_status', '見積もり依頼')
                ->orWhere('Property_status', '見積もり完了');
        })
            ->orderBy('Property_status', 'desc')
            ->get();


        return view('dp_construction.estimate', ['property_list' => $property_list]);

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function estimate_detail($id)
    {

        $property = Property::find($id);

        return view('dp_construction.estimate_detail', ['property' => $property]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function input()
    {


        return view('dp_construction.input');


    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public
    function store()
    {
        return view('dp_construction.store');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public
    function edit($id)
    {
        $property = Property::find($id);
        $constructions = Construction::all();
        $tools = Tool::all();
        $manufacturers = Manufacturers::all();
        $quotation = Quotation::all();

        return view('dp_construction.edit', ['constructions' => $constructions, 'property_list' => $property, 'manufacturers' => $manufacturers, 'tools' => $tools, 'quotation' => $quotation]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public
    function update()
    {
        return view('dp_construction.update');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public
    function destroy()
    {
        return view('dp_construction.destroy');
    }


}
