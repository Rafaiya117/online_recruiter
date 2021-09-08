<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post_Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $post__jobs =Post_Job::paginate(10);
        return view('frontend.layouts.home',compact('post__jobs'));
}
}
