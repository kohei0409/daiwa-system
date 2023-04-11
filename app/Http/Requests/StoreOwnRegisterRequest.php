<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOwnRegisterRequest extends FormRequest
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
            'OwnerName' => 'required|string|max:255',
            'Memo' => 'nullable|string',
            'Stance' => 'required|in:0,1',
            'RegisteredTransfer' => 'nullable|date',
            'BukkenID' => 'required',
            'Register' => 'required',
        ];
    }
}
