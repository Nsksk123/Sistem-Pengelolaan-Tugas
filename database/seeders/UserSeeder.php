<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => 'Teacher', 'email' => 'teacher@gmail.com', 'role_id' => 1, 'password' => Hash::make('teacher123')],
            ['name' => 'student1', 'email' => 'student1@gmail.com', 'role_id' => 2, 'password' => Hash::make('student1123')],
            ['name' => 'student2', 'email' => 'student2@gmail.com', 'role_id' => 2, 'password' => Hash::make('student2123')],
            ['name' => 'student3', 'email' => 'student3@gmail.com', 'role_id' => 2, 'password' => Hash::make('student3123')],
            ['name' => 'student4', 'email' => 'student4@gmail.com', 'role_id' => 2, 'password' => Hash::make('student4123')],
        ];

        foreach($data as $value){
            User::insert([
                'name' => $value['name'],
                'email' => $value['email'],
                'password' => $value['password'],
                'role_id' => $value['role_id'],
            ]);
        }
    }
}
