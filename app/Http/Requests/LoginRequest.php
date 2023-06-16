<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
        return [
            'mobile' => 'required|max:11|min:11|regex:/^[0-9\-۰-۹]+$/u',
            'password' => 'required|max:10|min:6|regex:/^[0-9\-۰-۹]+$/u',
        ];
    }
}
