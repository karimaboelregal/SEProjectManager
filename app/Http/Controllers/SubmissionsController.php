<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SubmissionValue;


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
}
