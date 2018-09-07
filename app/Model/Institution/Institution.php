<?php

namespace App\Model\Institution;

use App\Model\Level\Level;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{

    public function Levels()
    {
        return $this->belongsTo(Level::class);
    }
}
