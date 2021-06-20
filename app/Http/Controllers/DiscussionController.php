<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discussion;

class DiscussionController extends Controller
{
    //

    public function storeDiscussion(Request $request)
    {
        $validated = $request->validate(['message' => 'required|max:250',]);
        $discussion = new Discussion();
        $message = $request->input();
        $discussion->Message = $message['message'];
        $discussion->ProjectId = $message['projectId'];
        $discussion->UserId = \Session::get('userData')->userid;
        $discussion->save();
        return redirect()->back();
    }


    
}
