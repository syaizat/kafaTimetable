<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('test'),
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'id'             => 2,
                'name'           => 'ali',
                'email'          => 'teacher@teacher.com',
                'password'       => bcrypt('test'),
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'id'             => 3,
                'name'           => 'abu',
                'email'          => 'teacher2@teacher2.com',
                'password'       => bcrypt('test'),
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'id'             => 4,
                'name'           => 'ahmad',
                'email'          => 'teacher3@teacher3.com',
                'password'       => bcrypt('test'),
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'id'             => 5,
                'name'           => 'seri',
                'email'          => 'teacher4@teacher4.com',
                'password'       => bcrypt('test'),
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'id'             => 6,
                'name'           => 'rosmah',
                'email'          => 'teacher5@teacher5.com',
                'password'       => bcrypt('test'),
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'id'             => 7,
                'name'           => 'Student',
                'email'          => 'student@student.com',
                'password'       => bcrypt('test'),
                'remember_token' => null,
                'class_id'       => 1,
            ],
        ];

        User::insert($users);
    }
}
