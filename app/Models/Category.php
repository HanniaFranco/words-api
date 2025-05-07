<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function words() 
    {
        return $this->hasMany(Word::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
