<?php

namespace App\Http\Resources\Country;

use Illuminate\Http\Resources\Json\Resource;

class CountryResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'emp' => 'countryResource',
            'region_id'=> $this->region->id ,
            'country_id' => $this->id ,
            'href' => [
                'Levels 1' => route('levels.index', [$this->region->id, $this->id , null])
            ]
        ];
    }
}
