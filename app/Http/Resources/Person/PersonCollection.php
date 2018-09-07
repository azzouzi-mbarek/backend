<?php

namespace App\Http\Resources\Person;

use App\Model\Country;
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
            'name' => $this->name,
            'category_person'=> CategoryPerson::find(LevelPerson::find($this->id)->category_person_id)->name
//            $id = $this->id,
//            'profile' => [
//                'link' => (function () {
//                    $region_id = Person::find($this->id);
//                    $country_id='';
//                    return route('persons.show', [$region_id,$country_id, $this->level_id,$this->id]);
//                })()
//            ],
        ];
    }
}
