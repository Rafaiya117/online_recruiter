<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post_Job;
use App\Models\Req_org;
use Illuminate\Http\Request;

class ReqOrgController extends Controller
{
    public function req_org(){
        return view('frontend.layouts.req_org');
    }
    public function req_orgPost(Request $request){
//        dd($request->all());

        Req_org::create([

            'name'=>$request->organization_name,
            'email'=>$request->organization_email,
            'mobile'=>$request->organization_mobile,
            'password'=>bcrypt($request->organization_email),

        ]);
        return redirect()->back()->with('success','User Registration Successful.');
    }
    public function post_job(){
        return view ('frontend.layouts.post_job');
    }
    public function post_jobStore(Request $request){



 Post_Job::create([
     'organization_name'=>$request->organization_name,
     'organization_address'=>$request->organization_address,
     'organization_email'=>$request->organization_email,
     'organization_mobile'=>$request->organization_mobile,
     'job_name'=>$request->job_name,
     'position'=>$request->position,
     'description'=>$request->description,
     'salary'=>$request->salary,
     'responsibilities'=>$request->responsibilities,
     'skill'=>$request->skill,
     'education'=>$request->education,


 ]);
        return redirect()->back()->with('success','Job Post Successful.');
    }
}
