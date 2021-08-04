<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function apitude(){
        return view('backend.layouts.question.apitude',);
    }
    public function personality(){
        return view('backend.layouts.question.personality',);
    }
    public function apitudelist( Request $request){

        Question::apitude([
            name=>$request->question,
            name=>$request->question
        ]);

        return redirect()->back();
    }
    public function personalitylist( Request $request){

        Question::personality([
            name=>$request->question,
            name=>$request->question
        ]);

        return redirect()->back();
    }
}
