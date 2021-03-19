<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class physical_store_sales_data extends FormRequest
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
            
            'cname' => "required",
            'c_address' => 'required',
            'phone' => "required",
            'p_id' => 'required',
            'p_name' => "required",
            'unit_price' => 'required',
            'quantity' => "required",
            'total_price' => 'required',
            'payment_type' => "required"
            

        ];
    }
}
