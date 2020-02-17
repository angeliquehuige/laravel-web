<?php

use Illuminate\Database\Seeder;
use App\Assignment;

class AssignmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(Article::class, 3)->create();

        $assignments = [
            [
                "course_id" => 1,
                "name" => "Oral exam",
                "weight" => 100,
                "result" => 0
            ],
            [
                "course_id" => 2,
                "name" => "Theoretical exam",
                "weight" => 100,
                "result" => 0
            ],
            [
                "course_id" => 3,
                "name" => "Practical exam",
                "weight" => 100,
                "result" => 0
            ],
            [
                "course_id" => 4,
                "name" => "Practical exam",
                "weight" => 50,
                "result" => 0
            ],
            [
                "course_id" => 4,
                "name" => "Game project",
                "weight" => 50,
                "result" => 0
            ],
            [
                "course_id" => 5,
                "name" => "Essay",
                "weight" => 100,
                "result" => 0
            ],
            [
                "course_id" => 5,
                "name" => "Exam",
                "weight" => 0,
                "result" => 0
            ],
            [
                "course_id" => 6,
                "name" => "Agile functioning",
                "weight" => 33,
                "result" => 0
            ],
            [
                "course_id" => 6,
                "name" => "English assignments",
                "weight" => 33,
                "result" => 0
            ],
            [
                "course_id" => 6,
                "name" => "English essay",
                "weight" => 33,
                "result" => 0
            ],
            [
                "course_id" => 7,
                "name" => "Assessment interview",
                "weight" => 100,
                "result" => 0
            ],
            [
                "course_id" => 8,
                "name" => "Practical exam",
                "weight" => 100,
                "result" => 0
            ],
            [
                "course_id" => 9,
                "name" => "Project",
                "weight" => 100,
                "result" => 0
            ],

        ];

        foreach ($assignments as $assignment) {
            Assignment::create($assignment);
        }
    }
}
