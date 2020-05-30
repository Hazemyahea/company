<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'title_ar'=>'required',
            'title_en'=>'required',
            'price'=>'required'
        ];
    }

    public  function messages()
    {
        return [
            'title_ar.required' => "برجاء كتابة اسم المنتج باللغة العربية",
            'title_en.required' => "برجاء كتابة اسم المنتج باللغة الانجليزية",
            'price.required'=>'برجاء كتابة سعر المنتج'

        ];

    }
}
