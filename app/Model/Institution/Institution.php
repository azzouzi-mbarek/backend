<?php

namespace App\Model\Institution;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    public function CategoryInstitution()
    {
        return $this->belongsTo(CategoryInstitution::class);
    }
}
