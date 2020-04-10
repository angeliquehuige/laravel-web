<?php

use Illuminate\Database\Seeder;
use App\Course;
use App\Assignment;

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
                "term_id" => 1,
                "name" => "Training and Professional Orientation",
                "ec" => 2.5,
                'assignments' => [
                    [
                        'name' => 'Oral exam',
                        'weight' => 100,
                        "result" => 7.5,
                    ],
                ]
            ],
            [
                "term_id" => 1,
                "name" => "Computer Science Basics",
                "ec" => 7.5,
                'assignments' => [
                    [
                        'name' => 'Theoretical exam',
                        'weight' => 100,
                        "result" => 7.9,
                    ],
                ]
            ],
            [
                "term_id" => 1,
                "name" => "Programming Basics",
                "ec" => 5,
                'assignments' => [
                    [
                        'name' => 'Practical exam',
                        'weight' => 100,
                        "result" => 10.0,
                    ],
                ]
            ],
            [
                "term_id" => 2,
                "name" => "Object-Oriented Programming",
                "ec" => 5.0,
                'assignments' => [
                    [
                        'name' => 'Practical exam',
                        'weight' => 50,
                        "result" => 5.8,
                    ],
                    [
                        'name' => 'Game project',
                        'weight' => 50,
                        "result" => 7.0,
                    ],
                ]
            ],

            [
                "term_id" => 2,
                "name" => "Professional Skills 1",
                "ec" => 5,
                'assignments' => [
                    [
                        'name' => 'Essay',
                        'weight' => 100,
                        "result" => 9.3,
                    ],
                ]
            ],
            [
                "term_id" => 3,
                "name" => "Professional Skills 2",
                "ec" => 2.5,
                'assignments' => [
                    [
                        'name' => 'Agile functioning',
                        'weight' => 50,
                        "result" => 7.0,
                    ],
                    [
                        'name' => 'English assignments',
                        'weight' => 50,
                        "result" => 9.8,
                    ],
                ]
            ],
            [
                "term_id" => 3,
                "name" => "Professional Workplace",
                "ec" => 2.5,
                'assignments' => [
                    [
                        'name' => 'Assessment interview',
                        'weight' => 100,
                        "result" => 7.7,
                    ],
                ]
            ],
            [
                "term_id" => 3,
                "name" => "Framework Development 1",
                "ec" => 5,
                'assignments' => [
                    [
                        'name' => 'Practical exam',
                        'weight' => 100,
                        "result" => 9.2,
                    ],
                ]
            ],
            [
                "term_id" => 3,
                "name" => "Framework Project 1",
                "ec" => 5,
                'assignments' => [
                    [
                        'name' => 'Requirements',
                        'weight' => 50,
                        "result" => 6.9,
                    ],
                    [
                        'name' => 'Project result',
                        'weight' => 50,
                        "result" => 8.3,
                    ],

                ]
            ]
        ];

        foreach($courses as $course)
        {
            $c = Course::create([
                'term_id' => $course['term_id'],
                'name' => $course['name'],
                'ec' => $course['ec']
            ]);

            if (isset($course['assignments']) && is_array($course['assignments']))
            {
                foreach($course['assignments'] as $assignment)
                {
                    Assignment::create([
                        'course_id' => $c->id,
                        'name' => $assignment['name'],
                        'weight' => $assignment['weight'],
                        'result' => $assignment['result']
                    ]);
                }
            }
        }
    }
}
