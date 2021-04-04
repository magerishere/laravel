<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'oldPassword'=>'required',
            'newPassword'=>'required|confirmed|min:8',
        ];
    }


    public function messages()
    {
        return [
            'oldPassword.required' => 'رمزعبور فعلی خود را وارد کنید!',
            'newPassword.required' => 'رمزعبور جدید خود را وارد کنید!',
            'newPassword.confirmed' => 'رمزعبور جدید با تکرار آن تطابق ندارد!',
            'newPassword.min' => 'رمزعبور جدید باید بیشتر از هشت رقم باشد!',
        ];

    }
}
