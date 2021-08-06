<?php

namespace App\Http\Requests\V1\Wineries;

use Illuminate\Foundation\Http\FormRequest;

class StoreWineryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'code'=>['required'],
            'name'=>['required','min:2', 'max:6'],
            'description'=>['required']
        ];
    }

    public function attributes()
    {
        return [
            'code' => 'código',
            'name' => 'nombre',
            'description' => 'descripción',
        ];
    }
}
