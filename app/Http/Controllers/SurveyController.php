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

        


        $surveyObj = DB::select("select s.id,s.SurveyName,q.QuestionText,q.id as questionId,qt.name as typeName
        FROM survey s
        JOIN question q
        ON q.SurveyId = s.id
        JOIN question_type qt
        ON qt.id = q.TypeId
        WHERE s.id = {$id}
        ");

        $surveys = json_decode(json_encode($surveyObj), true);

        
        /*DB::table('survey')
        ->join("question","survey.id","=","question.SurveyId")
        ->join("question_type","question_type.id","=","question.TypeId")
        ->select("survey.id","survey.SurveyName","question.QuestionText","question_type.name")
        ->where('survey.id',$id)->get();*/

        //dd(DB::getQueryLog()); // Show results of log
        
        return view('student_survey',['surveyObj'=>$surveys]);

    }



}
