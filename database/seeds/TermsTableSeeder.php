<?php

use Illuminate\Database\Seeder;

class TermsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $terms = [
            [
                "name" => "Blok 1"
            ],
            [
                "name" => "Blok 2"
            ],
            [
                "name" => "Blok 3"
            ]
        ];

        foreach ($terms as $term) {
            App\Term::create($term);
        }
    }
}
