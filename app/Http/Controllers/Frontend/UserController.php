<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post_Job;
use App\Models\Req_org;
use App\Models\User;
use App\Models\Apply;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signupForm()
    {
        return view('frontend.layouts.signup');
    }

    public function signupFormPost(Request $request)
    {

        User::create([
            'name'=>$request->customer_name,
            'mobile'=>$request->customer_mobile,
            'email'=>$request->customer_email,
            'role'=>'user',
            'password'=>bcrypt($request->customer_email),
        ]);

        return redirect()->route('home');

    }

    public function job_offer(){

        $post__jobs= Post_Job::with('category')->paginate(10);

        $categories=Category::all();
        return view('frontend.layouts.job_offer',compact('post__jobs','categories'));
    }
    public function apply(){

       return view('frontend.layouts.apply');
    }
    public function applyStore(Request $request){


        $fileName='';

        if($request->hasFile('file'))
        {
            $file=$request->file('file');
            //generate file name here
            $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$fileName);
        }

        Apply::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
            'file'=>$fileName
        ]);
        return redirect()->back()->with('success','Successful.');
    }

    public function login(){

        return view('frontend.layouts.login');
    }


    public function doLogin(Request $request)
    {
       // dd($request->all());
       // $credentials=$request->except('_token');

     //   if(Auth::attempt($credentials))
       // {
           // return redirect()->route('home');
            //user logged in
      //  }
        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login');
    }



    public  function registration(){

        return view('frontend.layouts.registration');
    }

    public function registrationPost(Request $request){

        Req_org::create([

            'name'=>$request->organization_name,
            'email'=>$request->organization_email,
            'mobile'=>$request->organization_mobile,
            'password'=>bcrypt($request->organization_email),

        ]);
        return redirect()->route('home');

    }

    public function search(){

       $search_text = $_GET['query'];
       $post__jobs=Post_Job::where('job_name','type','%'.$search_text.'%')->get();
         return view('frontend.layouts.search',compact('post__jobs'));
    }
}
