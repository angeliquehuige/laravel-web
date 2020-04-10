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
                "result" => 7.5,
            ],
            [
                "course_id" => 2,
                "name" => "Theoretical exam",
                "weight" => 100,
                "result" => 7.9,
            ],
            [
                "course_id" => 3,
                "name" => "Practical exam",
                "weight" => 100,
                "result" => 10.0,
            ],
            [
                "course_id" => 4,
                "name" => "Practical exam",
                "weight" => 50,
                "result" => 5.8,
            ],
            [
                "course_id" => 4,
                "name" => "Game project",
                "weight" => 50,
                "result" => 7.0,
            ],
            [
                "course_id" => 5,
                "name" => "Essay",
                "weight" => 100,
                "result" => 9.3,
            ],
            [
                "course_id" => 6,
                "name" => "Agile functioning",
                "weight" => 50,
                "result" => 7.0,
            ],
            [
                "course_id" => 6,
                "name" => "English assignments",
                "weight" => 50,
                "result" => 9.8,
            ],
            [
                "course_id" => 7,
                "name" => "Assessment interview",
                "weight" => 100,
                "result" => 7.7,
            ],
            [
                "course_id" => 8,
                "name" => "Practical exam",
                "weight" => 100,
                "result" => 9.2,
            ],
            [
                "course_id" => 9,
                "name" => "Requirements",
                "weight" => 50,
                "result" => 6.9,
            ],
            [
                "course_id" => 9,
                "name" => "Project result",
                "weight" => 50,
                "result" => 8.3,
            ],

        ];

        foreach ($assignments as $assignment) {
            Assignment::create($assignment);
        }
    }
}
