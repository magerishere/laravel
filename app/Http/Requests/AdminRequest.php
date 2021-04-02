<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'fname'=>'max:50',
            'lname'=>'max:50',
            'email'=>'email:rfc,dns',
            'phone_number'=>'max:11',
            'ability' => 'max:255',
            'url'=>'mimes:png,jpg,jpeg',
        ];
    }

    public function messages()
    {
        return [
            'fname.max' => 'نام بیشتر از 50 کاراکتر نباشد!',
            'lname.max' => 'نام خانوادگی بیشتر از 50 کاراکتر نباشد!',
            'email.email' => 'ایمیل معتبر وارد کنید!',
            'phone_number.max' => 'شماره تلفن همراه معتبر وارد کنید',
            'ability.max' => 'مهارت های شما بیشتر از 255 کاراکتر نباشد',
            'url.mimes' => 'عکس با پسوند png,jpg,jpeg قابل قبول میباشد!',
        ];
    }
}
