<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

}
