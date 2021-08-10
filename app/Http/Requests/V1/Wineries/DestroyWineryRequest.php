<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DestroyWineryRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ids' => ['required']
        ];
    }
    public function attributes()
    {
        return [
            'ids' => 'ID`s de usuario'
        ];
    }
}
