<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed grade
 * @property bool completed
 */
class Assignment extends Model
{
    protected $fillable = ["term_id", "course_name", "assignment_name", "assingment_weight", "course_ec", "assignment_result"];
    private $result;

    public function course()
    {
        return $this->belongsTo(Course::class);

    }
}
