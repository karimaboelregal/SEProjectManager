<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(Request $request, $id='0'){
        $projects = DB::table('project')->get();
        $projTemps = DB::table("projecttemplate")->get();
        if ($id == 0 && strlen($id) == 188) {
            $id = \Crypt::decrypt($id);
        }
        foreach ($projTemps as $proj) {
            if ($proj->id == $id) {
                $selected = $projTemps[$id];
                break;
            } else {
                $selected = $projTemps[0];
            }
        }
        return view ('projects',['projects'=>$projects, 'projTemps'=>$projTemps, 'selected'=>$selected]);
    }
    public function showStudent(Request $request, $id='0'){
        $projects = DB::table('project')->get();
        $projTemps = DB::table("projecttemplate")->get();
        if ($id == 0 && strlen($id) == 188) {
            $id = \Crypt::decrypt($id);
        }
        foreach ($projTemps as $proj) {
            if ($proj->id == $id) {
                $selected = $projTemps[$id];
                break;
            } else {
                $selected = $projTemps[0];
            }
        }
        
        return view ('student_projects',['projects'=>$projects, 'projTemps'=>$projTemps, 'selected'=>$selected]);
    }

    public function ViewProject(Request $request,$id){
        $project = DB::select("SELECT p.*,pt.*
        FROM project p
        JOIN projecttemplate pt
        ON pt.id = p.ProjectTemplateID
        WHERE p.id = {$id}
        ");
        
        $submissions = DB::select("SELECT pts.*
                FROM projecttemplate pt
                JOIN projecttemplatesubmissions pts
                ON pt.id = pts.projectTempID
                WHERE pt.id = {$project[0]->ProjectTemplateId}
                ORDER BY pts.id
                ");

        $has_submitted = DB::select("SELECT ptsv.SubmissionId,ptsv.id
            FROM project_template_submission_value ptsv
            JOIN project p
            ON p.id = ptsv.ProjectId
            WHERE p.id = {$id}
            ORDER BY ptsv.SubmissionId
        ");
        

        $discussions = DB::select("SELECT d.*,u.Surname
                FROM discussion d
                JOIN users u
                ON u.id = d.UserId
                WHERE d.ProjectId = {$id}
                ORDER BY d.id
                ");
        //dd($discussions);
        $projectAndDiscussion = array();
        array_push($projectAndDiscussion, $discussions);
        array_push($projectAndDiscussion, $project);
        //wierdly i can only pass two varialbles to the view so i pushed all into an array
        
        return view('project',['discussions'=>$discussions,'project'=>$project,'submissionValues'=>$has_submitted,'submissions'=>$submissions]);
    }

    public function ViewStudentProject(Request $request,$id){
        $project = DB::select("SELECT p.*,pt.*
        FROM project p
        JOIN projecttemplate pt
        ON pt.id = p.ProjectTemplateID
        WHERE p.id = {$id}
        ");
        
        $submissions = DB::select("SELECT pts.*
                FROM projecttemplate pt
                JOIN projecttemplatesubmissions pts
                ON pt.id = pts.projectTempID
                WHERE pt.id = {$project[0]->ProjectTemplateId}
                ORDER BY pts.id
                ");

        $has_submitted = DB::select("SELECT ptsv.SubmissionId,ptsv.id
            FROM project_template_submission_value ptsv
            JOIN project p
            ON p.id = ptsv.ProjectId
            WHERE p.id = {$id}
            ORDER BY ptsv.SubmissionId
        ");
        

        $discussions = DB::select("SELECT d.*,u.Surname
                FROM discussion d
                JOIN users u
                ON u.id = d.UserId
                WHERE d.ProjectId = {$id}
                ORDER BY d.id
                ");
        //dd($discussions);
        $projectAndDiscussion = array();
        array_push($projectAndDiscussion, $discussions);
        array_push($projectAndDiscussion, $project);
        //wierdly i can only pass two varialbles to the view so i pushed all into an array
        
        return view('student_project',['discussions'=>$discussions,'project'=>$project,'submissionValues'=>$has_submitted,'submissions'=>$submissions]);
    }

    public function createProjectForm(){
        $teams = DB::table('team')->get();
        $courses = DB::table('courses')->get();
        $project_templates = DB::table('projecttemplate')->get();
        return view ('createProjectForm',['teams'=>$teams,'project_templates'=>$project_templates]);

    }

    public function deleteProject(Request $request,$id){

        $project = DB::table('project')->where('id',$id)->delete();
        return \redirect('/projects');
     }

     public function createNewProject(Request $request){
        $title = $request->input('project_title');
        $description = $request->input('description');
        $client_number = $request->input('client_number');
        $client_name = $request->input('client_name');
        $client_email = $request->input('client_email');
        $team_id = $request->input('team_id');
        $project_template_id = $request->input('project_template_id');
        $tempID = $request->input('tempID');
        //wala i put a project template id in the projects table so care
        DB::table('Project')->insert([
            'ProjectTitle'=>$title,
            'ProjectDesc' =>$description,
            'ClientNumber'=>$client_number,
            'ClientName' => $client_name,
            'ClientEmail' =>$client_email,
            'TeamId'=>$team_id,
            'ProjectTemplateId' => $project_template_id
        ]);

        return \redirect('/student_projects');
    }

    function projTemp(Request $request,$id=1) {
        $projectTemplate = DB::table('projectTemplate')->where('id', $id);

    }

    public function editProject(Request $request){

        $id = $request->input('id');
        $title = $request->input('project_title');
        $description = $request->input('description');
        $client_number = $request->input('client_number');
        $client_name = $request->input('client_name');
        $client_email = $request->input('client_email');
        $team_id = $request->input('team_id');
        $tempID = $request->input('tempID');

        DB::table('project')->where('id',$id)->update([
            'ProjectTitle'=>$title,
            'ProjectDesc' =>$description,
            'ClientNumber'=>$client_number,
            'ClientName' => $client_name,
            'ClientEmail' =>$client_email,
            'TeamId'=>$team_id,
            'ProjectTemplateId' => $tempID
        ]);

        return \redirect('/projects');
    }

    public function projTempPage() {
        $course = DB::table('courses')->get();

        return view('projecttemplate', ['courses'=>$course]);
    }

    public function insertProjTemp(request $request) {
        $course = DB::table('courses')->get();
        $ID = DB::table('projecttemplate')->insertGetId([
            'templateName'=>$request->project_title,
            'description' =>$request->description
        ]);
        foreach ($course as $c) {
            if ($request[$c->Name] != null) {
                DB::table('projecttemplatecourses')->insertGetId([
                    'projectTempID'=>$ID,
                    'courseID' =>$c->id
                ]);
            }
        }
        $values = preg_split("/\,/", $request->vals);
        foreach ($values as $v) {
            DB::table('projecttemplatesubmissions')->insertGetId([
                'projectTempID'=>$ID,
                'submissionName' =>$request[$v]
            ]);        
        }
        return redirect()->back();
    }

    public function editProjectForm(Request $request,$id){

        $project = DB::table('project')->where('id',$id)->get();
        $teams = DB::table('team')->get();
        $projTemps = DB::table("projecttemplate")->get();
        return view('editProjectForm',['project'=>$project,'projTemps'=>$projTemps,'teams'=>$teams]);

    }
}
