<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
           'store.name' => 'required | min:1 | max:100',
           'store.body' =>'required | max:500',
           'image' => 'required',
           'sex' => 'required',
           'image' => 'required|max:1600|mimes:jpeg,png,jpg,pdf',
           'store.phone' => 'required | min:10|max:12',
           'store.bulding' => 'nullable',
           'store.zip' => 'required | max:7',
           'store.house_number' => 'required',

        ];

    }

    public function attributes()
   {
    return [
        'store.name' => '店名',
        'store.body' =>'店の特徴',
        'image' => '店舗イメージ',
        'sex' => 'ターゲットの性別',
        'brands_array[]' => 'ブランド',
        'store.phone' => '電話番号',
        'store.zip' => '郵便番号',
        'store.house_number' => '番地',

    ];
   }



}
