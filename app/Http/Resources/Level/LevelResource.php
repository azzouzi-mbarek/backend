<?php

namespace App\Http\Resources\Level;

use App\Model\Country;
use Illuminate\Http\Resources\Json\JsonResource;

class LevelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'region_id' => $this->country->region->id,
            'country_id' => $this->country_id,
            'population' => [
                'link' => (function () {
                    $region_id = Country::find($this->country_id)->region->id;
                    return route('population.index', [$region_id, $this->country_id, $this->id]);
                })()
            ],
            'legal_framework' => [
                'link' => (function () {
                    $region_id = Country::find($this->country_id)->region->id;
                    return route('legal_frameworks.index', [$region_id, $this->country_id, $this->id]);
                })()
            ],
            'communication_tools' => [
                'link' => (function () {
                    $region_id = Country::find($this->country_id)->region->id;
                    return route('communication_tools.index', [$region_id, $this->country_id, $this->id]);
                })()
            ],
            'finances' => [
                'link' => (function () {
                    $region_id = Country::find($this->country_id)->region->id;
                    return route('finances.index', [$region_id, $this->country_id, $this->id]);
                })()
            ],
            'level_id' => $this->level,
            'emp' => 'LevelResource',
            'key' => $this->key,
            'href' => [
                'levels ' => (function () {

                    $region_id = Country::find($this->country_id)->region->id;
                    return route('levels.index', [$region_id, $this->country_id, 'id' => $this->id]);

                })()
            ]
        ];
    }
}
