<?php

use Illuminate\Database\Seeder;
use App\Course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(Course::class, 3)->create();
        $courses = [
            [
                "name" => "Training and Professional Orientation",
                "ec" => 2.5,
            ],
            [
                "name" => "Computer Science Basics",
                "ec" => 7.5,
            ],
            [
                "name" => "Programming Basics",
                "ec" => 5,
            ],
            [
                "name" => "Object-Oriented Programming",
                "ec" => 10,
            ],
            [
                "name" => "Professional Skills 1",
                "ec" => 5,
            ],
            [
                "name" => "Dutch language",
                "ec" => 0,
            ],
            [
                "name" => "Professional Skills 2",
                "ec" => 2.5,
            ],
            [
                "name" => "Professional Workplace",
                "ec" => 2.5,
            ],
            [
                "name" => "Framework Development 1",
                "ec" => 5,
            ],
            [
                "name" => "Framework Project 1",
                "ec" => 5,
            ]
        ];

        foreach($courses as $course) {
            Course::create($course);
        }

    }
}
