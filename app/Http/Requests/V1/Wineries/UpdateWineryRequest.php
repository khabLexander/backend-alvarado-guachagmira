<?php

namespace App\Http\Requests\V1\Wineries;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWineryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'code'=>['required'],
            'name'=>['required','min:2', 'max:15'],
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
