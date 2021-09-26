<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post_Job;
use App\Models\Req_org;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function ORG_Registration(){

        $req_orgs= Req_org::paginate(10);

        return view('backend.layouts.details.org_registration',compact('req_orgs'));
    }

    public function req_org(){
        return view('backend.layouts.req_org');
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
        $post__jobs=Post_Job::with('category')->paginate(10);

        $categories=Category::all();
        return view ('backend.layouts.details.post_job',compact('post__jobs','categories'));
    }
    public function post_jobStore(Request $request){

        $fileName='';
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            //generate file name here
            $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$fileName);
        }


        Post_Job::create([
            'category_id'=>$request->category_id,
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
            'image'=>$fileName


        ]);
        return redirect()->back()->with('success','Job Post Successful.');
    }
}
