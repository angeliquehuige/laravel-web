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
//        $courses = [
//            [
//                "term_id" => 1,
//                "name" => "Training and Professional Orientation",
//                "ec" => 2.5,
//            ],
//            [
//                "term_id" => 1,
//                "name" => "Computer Science Basics",
//                "ec" => 7.5,
//            ],
//            [
//                "term_id" => 1,
//                "name" => "Programming Basics",
//                "ec" => 5,
//            ],
//            [
//                "term_id" => 2,
//                "name" => "Object-Oriented Programming",
//                "ec" => 10,
//            ],
//            [
//                "term_id" => 2,
//                "name" => "Professional Skills 1",
//                "ec" => 5,
//            ],
//            [
//                "term_id" => 2,
//                "name" => "Dutch language",
//                "ec" => 0,
//            ],
//            [
//                "term_id" => 3,
//                "name" => "Professional Skills 2",
//                "ec" => 2.5,
//            ],
//            [
//                "term_id" => 3,
//                "name" => "Professional Workplace",
//                "ec" => 2.5,
//            ],
//            [
//                "term_id" => 3,
//                "name" => "Framework Development 1",
//                "ec" => 5,
//            ],
//            [
//                "term_id" => 3,
//                "name" => "Framework Project 1",
//                "ec" => 5,
//            ]
//        ];
//
//        foreach($courses as $course) {
//            Course::create($course);
//        }

        for ($i = 1; $i <= 4; $i++)
        {
            App\Term::create(['id' => $i]);
        }
//
    }
}
