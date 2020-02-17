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
    private $result;

    public function setGrade($result)
    {
        if ($result > $this->result) {
            $this->result = $result;
        }

        if ($this->result >= 5.5) {
            $this->completed = true;
        }

        $this->save();
    }

    public function course()
    {
        return $this->belongsTo(Course::class);

    }
}
