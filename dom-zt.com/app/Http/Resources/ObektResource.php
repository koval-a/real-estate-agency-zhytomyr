<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ObektResource extends JsonResource
{
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'square'=>$this->square,
            'price'=>$this->price
        ];
    }

    public function with($request)
    {
        return [
            'version' => 'v1.0.1',
            'author' => 'Yaroslav Lukyanchuk',
            'website' => url('https://yarik.lukyanchuk.com')
        ];
    }
}
