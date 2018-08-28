<?php

namespace App\Model\Level;

//use App\Model\Level\CommunicationTool;
//use App\Model\Level\Evenement;
//use App\Model\Level\Finance;
//use App\Model\Level\LegalFramework;
//use App\Model\Level\Population;
//use App\Model\Level\Programme;
use App\Model\Country;
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
    public  function  DownLevel(){
        return $this->hasMany(self::class ,'level_id','id');
    }
    public  function  UpLevel(){
        return $this->belongsTo(self::class ,'id','level_id');
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
}
