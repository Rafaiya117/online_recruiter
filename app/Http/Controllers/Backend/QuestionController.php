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
}
