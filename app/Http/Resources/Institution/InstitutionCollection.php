<?php

namespace App\Http\Resources\Institution;

use App\Model\Institution\CategoryInstitution;
use App\Model\Level\CategoryLevelInstitution;
use App\Model\Level\InstitutionLevel;
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

        ];
    }
}
