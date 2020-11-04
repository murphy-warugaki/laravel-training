<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
