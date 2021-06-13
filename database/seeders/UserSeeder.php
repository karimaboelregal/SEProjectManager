<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'Email' => 'Essam@gmail.com',
            'Surname' => 'Essam',
            'Password' => '1234',
            'Activated' => '1',
            'RoleId' => '1'
        ]);
        DB::table('users')->insert([
            'Email' => 'Yomna@gmail.com',
            'Surname' => 'Yomna',
            'Password' => '1234',
            'Activated' => '1',
            'RoleId' => '1'
        ]);
        DB::table('users')->insert([
            'Email' => 'ahmed@gmail.com',
            'Surname' => 'ahmed',
            'Password' => '1234',
            'Activated' => '1',
            'RoleId' => '3'
        ]);
        DB::table('users')->insert([
            'Email' => 'mohamed@gmail.com',
            'Surname' => 'mohamed',
            'Password' => '1234',
            'Activated' => '1',
            'RoleId' => '3',
            'UniversityId' => '1810669',
            'Preference' => 'C++ , Java',
        ]);
        DB::table('users')->insert([
            'Email' => 'adel@gmail.com',
            'Surname' => 'adel',
            'Password' => '1234',
            'Activated' => '1',
            'RoleId' => '3',
            'UniversityId' => '1801928',
            'Preference' => 'C++ , embedded systems',
        ]);
    }
}
