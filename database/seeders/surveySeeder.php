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
                    'QuestionText' => 'I think that I would like to use this website frequently',
                    'IsRequired' => '1',
                    'TypeId'=>'1',
                    'SurveyId' =>'1'
                ]);


        DB::table('question')->insert([
                    'QuestionText' => 'I found the website unnecessarily complex',
                    'IsRequired' => '1',
                    'TypeId'=>'1',
                    'SurveyId' =>'1'
                ]);

        DB::table('question')->insert([
            'QuestionText' => 'I thought the website was easy to use',
            'IsRequired' => '1',
            'TypeId'=>'1',
            'SurveyId' =>'1'
        ]);

        DB::table('question')->insert([
                    'QuestionText' => 'I think that I would need the support of a technical person to be able to use this website',
                    'IsRequired' => '1',
                    'TypeId'=>'1',
                    'SurveyId' =>'1'
                ]);

       DB::table('question')->insert([
                    'QuestionText' => 'I found the various functions in this website were well integrated',
                    'IsRequired' => '1',
                    'TypeId'=>'1',
                    'SurveyId' =>'1'
                ]);

        DB::table('question')->insert([
                    'QuestionText' => 'I thought there was too much inconsistency in this website',
                    'IsRequired' => '1',
                    'TypeId'=>'1',
                    'SurveyId' =>'1'
                ]);

        DB::table('question')->insert([
            'QuestionText' => 'I would imagine that most people would learn to use this website very quickly.',
            'IsRequired' => '1',
            'TypeId'=>'1',
            'SurveyId' =>'1'
        ]);
        DB::table('question')->insert([
            'QuestionText' => 'I found the website very cumbersome to use',
            'IsRequired' => '1',
            'TypeId'=>'1',
            'SurveyId' =>'1'
        ]);
        DB::table('question')->insert([
            'QuestionText' => 'I felt very confident using the website',
            'IsRequired' => '1',
            'TypeId'=>'1',
            'SurveyId' =>'1'
        ]);
        DB::table('question')->insert([
            'QuestionText' => 'I needed to learn a lot of things before I could get going with this system',
            'IsRequired' => '1',
            'TypeId'=>'1',
            'SurveyId' =>'1'
        ]);
       
        

        

        
    }
}
