<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'=>'required|max:100',
            'url'=> 'mimes:jpg,png,jpeg|max:5048', // image
            'name'=>'required', // category
            'description'=>'required|min:20',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'عنوان مطلب',
            'name.required'=> 'دسته بندی',
            'url.mimes'=> 'عکس فقط با فرمت jpg,png,jpeg',
            'description.required' => 'توضیحات مطلب',
            'description.min' => 'توضیحات مطلب بیشتر از 20 کاراکتر',
        ];
    }
}
