<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    public function terms()
    {
        return $this->hasMany(Term::class);

    }
}
