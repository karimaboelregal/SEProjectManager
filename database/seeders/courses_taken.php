<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class courses_taken extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('course_taken')->insert([
            'StudentId' => '3',
            'CourseId' => 1,
        ]);
    }
}
