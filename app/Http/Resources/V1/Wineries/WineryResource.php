<?php

namespace App\Http\Resources\V1\Wineries;

use Illuminate\Http\Resources\Json\JsonResource;

class WineryResource extends JsonResource
{

    public function toArray($request)
    {
        return[
            'id' =>$this->id,
            'name' =>$this->name,
            'code' =>$this->code,
            'status' =>$this->status,
        ];
    }
}
