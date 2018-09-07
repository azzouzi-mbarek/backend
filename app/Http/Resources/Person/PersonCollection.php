<?php

namespace App\Http\Resources\Person;

use App\Model\Country;
use App\Model\Level\Level;
use App\Model\Person\CategoryPerson;
use App\Model\Person\LevelPerson;
use App\Model\Person\Person;
use Illuminate\Http\Resources\Json\JsonResource;

class PersonCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'category_person' => CategoryPerson::find(LevelPerson::find($this->id)->category_person_id)->name,
            'level_id' => LevelPerson::find($this->id)->level_id,
            'country_id' => Level::find(LevelPerson::find($this->id)->level_id)->country->id,
            'region_id' => Country::find(Level::find(LevelPerson::find($this->id)->level_id)->country_id)->region_id,
            'profile' => [
                'link' => (function () {
                    $level_id = LevelPerson::find($this->id)->level_id;
                    $country_id = Level::find(LevelPerson::find($this->id)->level_id)->country->id;
                    $region_id = Country::find(Level::find(LevelPerson::find($this->id)->level_id)->country_id)->region_id;
                    return route('persons.show', [$region_id, $country_id, $level_id, $this->id]);
                })()
            ],
        ];
    }
}
