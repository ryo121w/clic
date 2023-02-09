<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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

            'review.title' => 'required | min:1 | max:20',
            'review.body' => 'required | min:10 | max: 300',

        ];
    }

    public function attributes()
    {
        return [
        'review.title' => 'タイトル',
        'review.body' => 'レビュー',


        ];
    }
}
