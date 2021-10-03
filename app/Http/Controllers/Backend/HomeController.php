<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Apply;
use App\Models\Post_Job;
use App\Models\Req_org;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
       // $title='Dashboard';
       // $link='Dashboard / home';
        $title='Dashboard';
        $link= 'Admin/dashboard';
        $post__jobs_count=Post_Job::all()->count();
        $user_count=User::all()->count();
        $cv_count=Apply::all()->count();
        return view('backend.layouts.home',compact('title', 'link','post__jobs_count','user_count','cv_count') );
       // return view('backend.layouts.home',compact('title','link'));
    }
    public function report()
    {
        $post__jobs=Post_Job::all();
//        dd($ambulance);

        return view('backend.report-data',compact('post__jobs'));

    }

    public function acceptRequest($id)
    {
        $req_orgs=Req_org::find($id);
        $req_orgs->update([
            'status'=>'accepted'
        ]);

        return redirect()->back();

    }


}
