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
           'image' => 'required',
           'store.phone' => 'required | max:12',
           'store.bulding' => 'unrequired',

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

    ];
   }



}
