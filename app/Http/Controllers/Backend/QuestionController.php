<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Req_org;
class QuestionController extends Controller
{
    public function _list(){

        $questions = Question::paginate(10);

        return view('backend.layouts.question._list',compact('questions'));
    }
    public function create()
    {
        return view('backend.layouts.question.create');
    }

    public function add_Ques(){

        return view('backend.layouts.question.add_Ques',);
    }
    public function store(Request $request){

        Question::create([
            'question'=> $request->question,
            'answar1'=>$request->answar1,
            'answar2'=>$request->answar2,
            'answar3'=>$request->answar3

        ]);
        return redirect()->route('question._list');
    }
}
