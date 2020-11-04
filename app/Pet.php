<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $guarded = ['id'];

    public function foods()
    {
        return $this->hasMany(Food::class);
    }
}
