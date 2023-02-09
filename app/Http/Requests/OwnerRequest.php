<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OwnerRequest extends FormRequest
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
            'owner.store_name' => 'required',
            'owner.owner_name' => 'required',
            'owner.store_address' => 'required',
            'owner.owner_email' => 'required',
            'owner.phone' => 'required | min:10 | max:12',

        ];
    }

    public function attributes()
    {
        return [
            'owner.store_name' => '店舗名',
            'owner.owner_name' => '代表者名',
            'owner.store_address' => '店舗住所',
            'owner.owner_email' => '店舗メールアドレス',
            'owner.phone' => '電話番号',
            ];
    }
}
