<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GreetingRequest extends FormRequest
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
            'username' => 'required|max:20',
        ];
    }

    public function messages() {
        return [
            'username.required' => '名前を入力してください。',
            'username.max' => '名前は２０文字以下で入力してください。'
        ];
    }
}
