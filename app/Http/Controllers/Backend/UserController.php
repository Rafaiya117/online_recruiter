<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_view(){
        return view('backend.layouts.user.user_view',);
    }
}
