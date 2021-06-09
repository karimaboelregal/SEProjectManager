<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Survey;
class SurveyController extends Controller
{
    //

    public function ViewSurvey(Request $request,$id=1){

        DB::enableQueryLog(); // Enable query log

        


        $surveyObj = DB::table('survey')
        ->join("question","survey.id","=","question.SurveyId")
        ->join("question_type","question_type.id","=","question.TypeId")
        ->select("survey.id","survey.SurveyName","question.QuestionText","question_type.name")
        ->where('survey.id',$id)->get();

        //dd(DB::getQueryLog()); // Show results of log
        
        return view('student_survey',['surveyObj'=>$surveyObj]);

    }



}
