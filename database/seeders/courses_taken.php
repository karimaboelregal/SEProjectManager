<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'StudentId' => 'ahmed@gmail.com',
            'CourseId' => 1,
        ]);
    }
}
