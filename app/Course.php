<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ["term_id", "name", "ec"];

    private $completed;
    private $assignments;

    public function assignments()
    {
        return $this->hasMany(Assignment::class);

    }

    public function completedCourse()
    {

        foreach ($this->assignments as $assignment) {

            if ($assignment->completed === true) {
                return $assignment->course->ec;
            }
        }

    }

    public function term()
    {
        return $this->belongsTo(Term::class);
    }

//    public function completedCourse()
//    {
//
//        foreach ($this->assignments as $assignment) {

//            if ($assignment->completed === true) {
//                return $assignment->course->ec;
//            }
//        }
//
//    }
}
