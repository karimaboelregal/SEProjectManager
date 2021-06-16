<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discussion;

class DiscussionController extends Controller
{
    //

    public function store(Request $request)
    {
        
        $validated = $request->validate(['message' => 'required|max:250',]);
        $discussion = new Discussion();
        $message = $request->input();
        $discussion->Message = $message['message'];
        $discussion->ProjectId = 3;
        $discussion->save();
        return \redirect('student_project');
    }


    
}
