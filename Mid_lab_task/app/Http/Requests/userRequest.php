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
            
            'fname' => "required|regex:/^[a-zA-Z-' ]*$/|min:3|max:30|bail",
            'username' => 'required|unique:all_user_table|min:3|max:30|bail',
            'email' => 'required|email:rfc,dns|unique:all_user_table|min:10|max:50|bail',
            'password' => 'required|min:6|bail',
            'cpassword' => 'required|same:password|bail',
            'address' => 'required',
            'company' => 'required|min:3|max:20|bail',
            'phone' => 'required|numeric|bail',
            'city' => 'required|min:3|max:20|bail',
            'country' => 'required|min:3|max:20|bail',
            'type' => 'required'
        ];
    }
}
