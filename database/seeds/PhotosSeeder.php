<?php

use Illuminate\Database\Seeder;

class PhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photos = [
            [
                'path' => 'wLH9MmK/New-Doc-2019-03-06-13-03-43-2-01.jpg'
            ],
            [
                'path' => 'n0dXwzz/New-Doc-2019-03-06-13-03-43-3-02.jpg'
            ],
            [
                'path' => '2FY7ySt/New-Doc-2019-03-06-13-03-43-5-01.jpg'
            ],
            [
                'path' => 'HTTP86G/New-Doc-2019-03-06-13-03-43-6-01.jpg'
            ],
            [
                'path' => 'tXwVpQG/New-Doc-2019-03-06-13-03-43-7-01.jpg'
            ],
            [
                'path' => 'phpdsDV/New-Doc-2019-03-06-13-03-43-9-01.jpg'
            ],
            [
                'path' => 'BgsnRbp/New-Doc-2019-03-06-13-03-43-10-01.jpg'
            ],
            [
                'path' => 'YRrN1CL/New-Doc-2019-03-06-13-03-43-11.jpg'
            ],
            [
                'path' => 'FqXp2wn/New-Doc-2019-03-06-13-03-43-12-01.jpg'
            ],
            [
                'path' => 'fCt64pN/New-Doc-2019-03-06-13-03-43-13-01.jpg'
            ],
            [
                'path' => 'bHvBRDh/New-Doc-2019-03-06-13-03-43-14-01.jpg'
            ],
            [
                'path' => 'B4ph027/New-Doc-2019-03-06-13-03-43-17-01.jpg'
            ],
            [
                'path' => 'MhsLn4d/New-Doc-2019-03-06-13-03-43-18.jpg'
            ],
            [
                'path' => '3YT0YyL/New-Doc-2019-03-06-13-03-43-19.jpg'
            ],
            [
                'path' => '5xfrQ73/New-Doc-2019-03-06-13-03-43-20-01.jpg'
            ],
            [
                'path' => 'RpwkhnC/New-Doc-2019-03-06-13-03-43-21-01.jpg'
            ],
            [
                'path' => 'gWHp0rD/New-Doc-2019-03-06-13-03-43-22-01.jpg'
            ],
            [
                'path' => 'jMZS6vP/New-Doc-2019-03-06-13-03-43-24-01.jpg'
            ],
            [
                'path' => 'Twk536L/New-Doc-2019-03-06-13-03-43-25-01.jpg'
            ],
            [
                'path' => 'CMTWyz3/New-Doc-2019-03-06-13-03-43-26-01.jpg'
            ],
            [
                'path' => 'dJZgZzM/New-Doc-2019-03-06-13-03-43-27.jpg'
            ],
            [
                'path' => 'p1YBJJW/New-Doc-2019-03-06-13-03-43-30.jpg'
            ]
        ];

        foreach ($photos as $photo) {
            Photo::create($photo);
        }
    }
}
