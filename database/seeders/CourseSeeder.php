<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('courses')->insert([
            'Name' => 'SE',
            'Description' => 'Software engineering is a discipline that allows us to apply engineering and computer science concepts in the development and maintenance of reliable, usable, and dependable software.',
            'Code' => '1',
            'InstructorId' => '1'
        ]);

        DB::table('courses')->insert([
            'Name' => 'HCI',
            'Description' => 'test test',
            'Code' => '1',
            'InstructorId' => '1'
        ]);
    }
}
