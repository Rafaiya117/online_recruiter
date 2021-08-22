<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function apitude_list(){

        $questions = Question::paginate(10);

        return view('backend.layouts.question.apitude_list',compact('questions'));
    }



    public function personality_list(){
        return view('backend.layouts.question.personality_list',);
    }

}
