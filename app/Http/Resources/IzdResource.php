<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IzdResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'ID - ' => $this->resource->id,
            'Firma - ' => $this->resource->firma,
            'Adresa - ' => $this->resource->adresa,
            'Grad - ' => $this->resource->grad,
            'Sajt - ' => $this->resource->sajt
        ];
    }
}
