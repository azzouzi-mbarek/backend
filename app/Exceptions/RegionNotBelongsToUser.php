<?php

namespace App\Exceptions;

use Exception;

class RegionNotBelongsToUser extends Exception
{
    public function render()
    {
        return ['errors'=>'Region Not Belongs To User'];
    }
}
