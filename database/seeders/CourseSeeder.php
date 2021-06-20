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
            'Description' => 'test test',
            'Code' => '1',
            'InstructorId' => '1'
        ]);
    }
}
