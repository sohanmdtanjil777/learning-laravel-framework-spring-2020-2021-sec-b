<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
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
            
            'fname' => "required|regex:/^[a-zA-Z-' ]*$/|bail",
            'username' => 'required|unique:all_user_table|bail',
            'email' => 'required|email:rfc,dns|unique:all_user_table|bail',
            'password' => 'required|min:6|bail',
            'cpassword' => 'required|same:password|bail',
            'address' => 'required',
            'company' => 'required',
            'phone' => 'required|numeric',
            'city' => 'required',
            'country' => 'required',
            'type' => 'required'
        ];
    }
}
