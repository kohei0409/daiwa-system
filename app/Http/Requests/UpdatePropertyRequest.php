<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                        'Property_bukkenName' => 'required',


            //
//            'property_id' => 'required',
//            'property_name' => 'required',
//            'property_address' => 'required',
//            'property_kubun' => 'required',
//            'property_tochi' => 'required',
//            'property_tatemono' => 'required',
//            'property_shiire' => 'required',
        ];
    }
}
