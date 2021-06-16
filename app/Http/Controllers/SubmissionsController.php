<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SubmissionValue;
use Illuminate\Support\Facades\DB;


class SubmissionsController extends Controller
{
    //
    public function storeSubmissionValue(Request $request)
    {

        //cosntruct the path
        $path = $request->file('file')->store('submissions');
        //save the file
        
        //get the data
        //save the data
        $submission_value = new SubmissionValue();
        $submission_value ->ProjectId = $request->input('ProjectId');
        $submission_value ->TemplateId = $request->input('TemplateId');
        $submission_value ->SubmissionId = $request->input('SubmissionId');
        $submission_value ->LaravelName = $path;
        $submission_value ->OriginalName = $request->file('file')->getClientOriginalName();
        $submission_value->save();

        return redirect()->back();
    }

    public function editSubmissionValue(Request $request)
    {

    }

    public static function has_submited($projectId)
    {
        //query to check if a submission has been placed or not

        $has_submitted = DB::select("SELECT ptsv.id
            FROM project_template_submission_value ptsv
            JOIN project p
            ON p.id = ptsv.ProjectId
            WHERE p.id = {$projectId}
        ");

        return $has_submitted;
    }

    //i think this takes a request not sure tho
    public function download_submission()
    {

    }
}
