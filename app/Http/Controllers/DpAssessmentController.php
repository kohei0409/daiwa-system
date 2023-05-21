<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDp_assessmentRequest;
use App\Http\Requests\UpdateDp_assessmentRequest;
use App\Models\Dp_assessment;
use App\Models\Property;

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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {

        $query = Property::all();
        $property_list = $query->where('Property_status', '査定中');

        return view('dp_assessment.list', ['property_list' => $property_list]);
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
    public function store()
    {
        return view('dp_assessment.store');
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


}
