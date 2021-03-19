<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class store_product extends FormRequest
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
            'p_name' => "required|regex:/^[a-zA-Z-' ]*$/|bail",
            'category' => 'required',
            'unit_price' => 'required|numeric|bail',
            'product_status' => 'required'
            
        ];
    }
}
