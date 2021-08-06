<?php

namespace App\Http\Resources\V1\Wineries;

use Illuminate\Http\Resources\Json\ResourceCollection;

class WineryCollection extends ResourceCollection
{
    // public $collects = WineryResource::class
    public function toArray($request)
    {
        return [ 'data'=> $this->collection];
    }
}
