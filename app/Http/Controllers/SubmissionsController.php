<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SubmissionValue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;



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
        $path = $request->file('Editfile')->store('submissions');
        
        $submission_value = new SubmissionValue();
        $submission_value = $submission_value->find($request->SubmissionValueId);
        $submission_value ->OriginalName = $request->file('Editfile')->getClientOriginalName();
        Storage::delete($submission_value -> LaravelName);
        $submission_value -> LaravelName = $path;
        $submission_value ->save();
        return redirect()->back();
    }

    public function fetchSubmission(Request $request)
    {
        $data = $request->data;
        $SubmissionValueId = $data[0];
        $submissionValues = SubmissionValue::where('id',$SubmissionValueId)->get();
        return $submissionValues;
    }

    //i think this takes a request not sure tho
    public function download_submission()
    {

    }
}
