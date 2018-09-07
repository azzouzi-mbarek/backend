<?php

namespace App\Http\Resources\Institution;

use App\Model\Country;
use App\Model\Institution\CategoryInstitution;
use App\Model\Level\CategoryLevelInstitution;
use App\Model\Level\InstitutionLevel;
use App\Model\Level\Level;
use Illuminate\Http\Resources\Json\JsonResource;

class InstitutionCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'=> $this->name,
            'type'=> CategoryInstitution::find($this->category_institution_id)->name,
            'category_partenariat'=> CategoryLevelInstitution::find(InstitutionLevel::find($this->id)->category_level_institution_id)->name,
            'profile_institution' => [
                'link' => (function () {
                    $level_id = InstitutionLevel::find($this->id)->level_id;
                    $country_id = Level::find(InstitutionLevel::find($this->id)->level_id)->country->id;
                    $region_id = Country::find(Level::find(InstitutionLevel::find($this->id)->level_id)->country_id)->region_id;
                    return route('persons.show', [$region_id, $country_id, $level_id, $this->id]);
                })()
            ],

        ];
    }
}
