<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {

        if($this->isMethod('post')){

        return [
            'first_name' => 'required|max:120|min:2|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
            'last_name' => 'required|max:120|min:2|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
            'mobile' => 'required|unique:users|max:11|min:11|regex:/^[0-9\-۰-۹]+$/u',
            'password' => 'required|max:10|min:6|regex:/^[0-9\-۰-۹]+$/u',
            'status' => 'required|numeric|in:0,1',


        ];
        

        }else{
            return [
                'first_name' => 'max:120|min:2|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
                'last_name' => 'max:120|min:2|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
                'mobile' => 'max:11|min:11|regex:/^[0-9\-۰-۹]+$/u',
                'password' => 'max:10|min:6|regex:/^[0-9\-۰-۹]+$/u',
                'status' => 'numeric|in:0,1',
    
    
            ];
        }

    

    }
}
