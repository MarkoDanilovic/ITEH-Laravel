<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PisResource extends JsonResource
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
            'Ime - ' => $this->resource->ime,
            'Prezime - ' => $this->resource->prezime,
            'Drzava - ' => $this->resource->drzava,
            'Broj knjiga - ' => $this->resource->broj_knjiga
        ];
    }
}
