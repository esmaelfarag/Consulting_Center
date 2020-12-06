<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            //
            'name_ar' => ['required' , 'max:100' , 'regex:/^[^\u0621-\u064A]+$/'],
            'name_en' => ['required' , 'max:100' , 'regex:/^[a-zA-Z\s]*$/'],
            'ssn' => 'required | max:14 | min:14 | unique:users',
            'ssn_photo_face'=>'required | mimes:jpeg,jpg,png',
            'ssn_photo_back'=>'required | mimes:jpeg,jpg,png',
            'phone' => ['required' , 'unique:users', 'min:7', 'max:11' ,'regex:/^[0-9]+$/'],
            'user_name'=>'required',
            'email' => 'required | email | unique:users',
            'password' => ['required' , 'min:5' , 'max:12' , 'regex:/[a-z]/' ,'regex:/[A-Z]/' , 'regex:/[0-9]/' , 'regex:/[@$!%*#?&]/'],
        ];
    }

    public function messages()
    {
        return [
            //
            'name_ar.required' => 'Name with arabic required',
            'name_ar.regex' => 'Name should be arabic text only.',
            'name_en.regex' => 'Name should be english text only.',
            'phone.regex' => 'WhatsApp should be number only 0-9.',
            'password.regex' => 'password should have contain lowercase, uppercase letter, at least one digit and special character',
            'name_en.required' => 'Name with english required',
            'ssn.required' => 'ID Card is required',
            'phone.required' => 'WhatsApp is required',
            'user_name.required' => 'User name is required',
            'ssn.max' => 'Id Card should be less than 14-digit',
            'phone.min' => 'WhatsApp should be between 7-digit and 11-digit',
            'phone.max' => 'WhatsApp should be less than 11-digit',
            'ssn.min' => 'Id Card should be 14-digit',
            'email.required' => 'Email is required',
            'email.unique' => 'Email Already exist',
            'ssn.unique' => 'ID Card Already exist',
            'phone.unique' => 'Phone number Already exist',
            'email.email' => 'Enter correct email address',
            'password.required' => 'Password is required',
            'ssn_photo_face.required'=>' Face photo ID card required',
            'ssn_photo_back.required'=>' Back photo ID required',
            'ssn_photo_face.mimes'=>' Face photo ID card should be image',
            'ssn_photo_back.mimes'=>' Back photo ID should be image  ',
        ];
    }
}
