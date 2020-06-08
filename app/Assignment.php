<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed grade
 * @property bool completed
 */
class Assignment extends Model
{
    protected $fillable = ["course_id", "name", "weight", "result"];

    public function course()
    {
        return $this->belongsTo(Course::class);

    }
}
