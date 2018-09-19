<?php

namespace App\Model\Level;

use App\Model\Country;
use App\Model\Institution\Institution;
use App\Model\Person\Person;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{

    public function Country()
    {
        return $this->belongsTo(Country::class);
    }
    public function CategoryLevel()
    {
        return $this->belongsTo(CategoryLevel::class);
    }
    public function level(){
        return $this->belongsTo(Level::class, 'id', 'level_id');
    }

    public function levels(){
        return $this->hasMany(Level::class, 'level_id', 'id');
    }
    public  function  Population(){
        return $this->hasMany(Population::class);
    }
    public  function  LegalFramework(){
        return $this->hasMany(LegalFramework::class);
    }
    public  function  CommunicationTool(){
        return $this->hasMany(CommunicationTool::class);
    }
    public  function  Finance(){
        return $this->hasMany(Finance::class);
    }
    public  function  Evenement(){
        return $this->hasMany(Evenement::class);
    }
    public  function  Programme(){
        return $this->hasMany(Programme::class);
    }
    public  function  Persons(){
        return $this->belongsToMany(Person::class);
    }
    public  function  Institutions(){
        return $this->belongsToMany(Institution::class);
    }
}
