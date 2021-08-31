<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Reg_org;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function view(){
        return view('backend.layouts.organization.view',);
    }

    public function add_Ques(){

        return view('backend.layouts.organization.add_Ques',);
    }
    public function store(Request $request){

        Question::create([
            'question'=> $request->question
        ]);
        return redirect()->route('organization.add_Ques');
    }
    public function addpersonality(){
        return redirect()->route('organization.addpersonality');
    }

    public function addDetails(){
        return view('backend.layouts.organization.addDetails',);
    }
    public function req_org(){
        return view('backend.layouts.organization.req_org');
    }
    public function req_orgFormPost(Request $request){
Reg_org::create([
    'name'=>$request->organization_name,
    'mobile'=>$request->organization_mobile,
    'email'=>$request->organization_email,
    'password'=>bcrypt($request->organization_email),

]);
        return redirect()->back()->with('success','User Registration Successful.');
    }
}
