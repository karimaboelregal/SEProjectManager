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

        DB::table('question')->insert([
                    'QuestionText' => 'Please answer these multiple choice questions',
                    'IsRequired' => '1',
                    'SurveyId' =>'1'
                ]);
        DB::table('question_type')->insert([
            'QuestionId' => '1',
            'choiceText' =>'Agile is the best method ever'
        ]);

        DB::table('question_type')->insert([
            'QuestionId' => '1',
            'choiceText' =>'lemme see what u agree on'
        ]);

        DB::table('question_type')->insert([
            'QuestionId' => '1',
            'choiceText' =>'foo'
        ]);

        DB::table('question_type')->insert([
            'QuestionId' => '1',
            'choiceText' =>'Bar'
        ]);

        DB::table('question_type')->insert([
            'QuestionId' => '1',
            'choiceText' =>'Baz'
        ]);

        
    }
}
