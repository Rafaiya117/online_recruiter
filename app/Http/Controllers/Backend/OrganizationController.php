<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post_Job;
use App\Models\Req_org;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function ORG_Registration(){

        $req_orgs= Req_org::paginate(10);

        return view('backend.layouts.organization.org_registration',compact('req_orgs'));
    }



    public function post_job(){

        $post__jobs=Post_Job::with('category')->paginate(10);
        $categories=Category::all();
        return view ('backend.layouts.organization.post_job',compact('post__jobs','categories'));
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
            'type'=>$request->type,
            'image'=>$fileName


        ]);
        return redirect()->back()->with('success','Job Post Successful.');
    }
}
