<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed grade
 * @property bool completed
 */
class Assignment extends Model
{
    public function setGrade($grade)
    {
        if ($grade > $this->grade) {
            $this->grade = $grade;
        }

        if ($this->grade >= 5.5) {
            $this->completed = true;
        }

        $this->save();
    }
}
