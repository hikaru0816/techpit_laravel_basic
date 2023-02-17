<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'username' => 'required|max:12',
            'password' => 'required|min:8|max:12|alpha_num',
            'latitube' => 'numeric|between:-90,90',
            'longitude' => 'numeric|between:-180,180',
        ];
    }
}
