<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Survey;
use App\Models\Question;
class SurveyController extends Controller
{
    //

    public function index(){     
        $surveys = Survey::all();
        return view ('surveys',['surveys'=>$surveys]);
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
                    'StudentId'=>1,
                    'QuestionId'=>$key
                    
                ]);
            }
        }

        foreach($quality as $key => $value)
        {
            DB::table('survey_answer')->insert([
                    'Answer'=>$value,
                    'SurveyId' =>$surveyId,
                    'StudentId'=>1,
                    'QuestionId'=>$key
                    
                ]);
        }
    
        
        return response()->json($result);
    }

    public function InsertSurvey(Request $request)
    {
        $survey = $request->input();
        //dd($survey);
        $surveyModel = new Survey();
        
        $surveyModel->SurveyName = $survey['title'];
        $surveyModel->CourseId = 1;
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
        return \redirect('/home');; 
        
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

        
        /*DB::table('survey')
        ->join("question","survey.id","=","question.SurveyId")
        ->join("question_type","question_type.id","=","question.TypeId")
        ->select("survey.id","survey.SurveyName","question.QuestionText","question_type.name")
        ->where('survey.id',$id)->get();*/

        //dd(DB::getQueryLog()); // Show results of log
        
        return view('student_survey',['surveyObj'=>$surveys]);

    }



}
