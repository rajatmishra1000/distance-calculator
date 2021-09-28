<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PincodeRequest extends FormRequest
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
            'circle' => 'required|string|max:100',
            'region' => 'required|string|max:100',
            'division' => 'required|string|max:100',
            'office' => 'required|string|max:100',
            'pincode' => 'required|integer|digits:6',
            'state' => 'required|string|max:100',
            'district' => 'required|string|max:100',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ];
    }
}
