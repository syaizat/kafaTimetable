<?php

use App\SchoolClass;
use Illuminate\Database\Seeder;

class SchoolClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = [
            [
                'id' => 1,
                'name' => 'tajwid'
            ],
            [
                'id' => 2,
                'name' => 'sirah'
            ],
            [
                'id' => 3,
                'name' => 'tadarus'
            ],
            [
                'id' => 4,
                'name' => 'arab'
            ]
        ];

        SchoolClass::insert($classes);
    }
}
