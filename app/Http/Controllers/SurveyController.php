<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Survey;
use App\Models\Question;
class SurveyController extends Controller
{
    //

    public function SurveyFromCourse($id){  
          
        $surveys = Survey::where('CourseId',$id)->get();
        return view ('surveys',['surveys'=>$surveys,'courseId'=>$id]);
    }

    public function SurveyBuildIndex($id)
    {
        
        return view ('surveybuild',['courseId'=>$id]);
    }

    public function ViewSurveyInsights($id)
    {

        
        DB::enableQueryLog(); // Enable query log
        /*$surveyObj = DB::select("SELECT s.SurveyName ,q.QuestionText,
        q.IsRequired,q.id as questionId,
        GROUP_CONCAT(sa.Answer SEPARATOR ',') as answers,
       GROUP_CONCAT(u.Surname SEPARATOR ',') as names,
        GROUP_CONCAT(u.id SEPARATOR ',') as studentId
            FROM question q
            JOIN survey s
            ON s.id = q.SurveyId
            JOIN survey_answer sa
            ON sa.QuestionId = q.id
            JOIN users u
            ON u.Id = sa.StudentId
            WHERE s.id= {$id}
            GROUP BY q.id,s.SurveyName,q.QuestionText,q.IsRequired");*/

        $surveyObj = DB::select("SELECT s.SurveyName ,q.QuestionText,
        q.IsRequired,q.id as questionId,qt.name as typename
            FROM question q
            JOIN survey s
            ON s.id = q.SurveyId
            JOIN question_type qt
            ON qt.id = q.TypeId
            WHERE s.id= {$id}");
        
        $surveys = json_decode(json_encode($surveyObj), true);
        
        for($i= 0;$i<count($surveys);$i++)
        {
            $surveyans = DB::select("SELECT sa.Answer,u.Surname,u.id as userid
            FROM survey_answer sa
            JOIN users u
            ON u.id = sa.StudentId
            WHERE sa.QuestionId= {$surveys[$i]['questionId']}");
            $answers = json_decode(json_encode($surveyans), true);
            $surveys[$i]['answer'] = $answers;
            
        }
        //dd(\Session::get('userData')->userid);
        return view('surveyinsights',['surveys'=>$surveys]);

        
    }
    public function InsertAnswer(Request $request){
        
        $data = $request->data;
        $quality = array();
        $surveyId = $request->surveyId;
        if(isset($data['Quality']))
            $quality = $data['Quality'];

        $result = "";
       
        
    //key is question id value is the answer 
        foreach($data as $key => $value)
        {
            if(!is_array($value))
            {                
                DB::table('survey_answer')->insert([
                    'Answer'=>$value,
                    'SurveyId' =>$surveyId,
                    'StudentId'=>\Session::get('userData')->userid,
                    'QuestionId'=>$key
                    
                ]);
            }
        }

        foreach($quality as $key => $value)
        {
            DB::table('survey_answer')->insert([
                    'Answer'=>$value,
                    'SurveyId' =>$surveyId,
                    'StudentId'=>\Session::get('userData')->userid,
                    'QuestionId'=>$key
                    
                ]);
        }
    
        
        return response()->json($result);
    }

    public function InsertSurvey(Request $request)
    {
        //model here
        //input type="text" name="questiontitle[]"
        $validated = $request->validate(['title' => 'required|max:100','questiontitle'=>'required',]);
        $survey = $request->input();
        //dd($survey['courseId']);
        //dd($survey);
        $surveyModel = new Survey();
        
        $surveyModel->SurveyName = $survey['title'];
        $surveyModel->CourseId = $survey['courseId'];
        $surveyModel->save();
        $lastId = $surveyModel->id;
        //dd($surveyModel->id);
        

        
        for($i = 0; $i < count($survey['type']); $i++)
        {
            $question = new Question();
            $question->IsRequired = 1;
            $question->SurveyId = $lastId;
            $question->TypeId = $survey['type'][$i];
            $question->QuestionText = $survey['questiontitle'][$i];
            $question->save();
        }
        
        return redirect()->route('SurveyFromCourse', ['id'=>$survey['courseId']]);
 
        
    }
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
        
        return view('student_survey',['surveyObj'=>$surveys]);

    }



}
