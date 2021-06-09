<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class surveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('survey')->insert([
            'SurveyName' => 'Sus Score',
            'CourseId' => '1'
        ]);
        DB::table('question_type')->insert([
            'name'=>'matrix'
        ]);
        DB::table('question_type')->insert([
            'name'=>'rating'
        ]);
        DB::table('question_type')->insert([
            'name'=>'text'
        ]);
        DB::table('question')->insert([
                    'QuestionText' => 'foo',
                    'IsRequired' => '1',
                    'TypeId'=>'1',
                    'SurveyId' =>'1'
                ]);


        DB::table('question')->insert([
                    'QuestionText' => 'bar',
                    'IsRequired' => '1',
                    'TypeId'=>'1',
                    'SurveyId' =>'1'
                ]);

        DB::table('question')->insert([
                    'QuestionText' => 'baz',
                    'IsRequired' => '1',
                    'TypeId'=>'1',
                    'SurveyId' =>'1'
                ]);
        

        

        
    }
}
