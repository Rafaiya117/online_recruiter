<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post_Job;
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

        return redirect()->back()->with('success','User Registration Successful.');

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

        $credentials = $request->except('_token');


        if(Auth::attempt($credentials))
        {
            if(auth()->user()->role=='user')
            {
                return redirect()->route('home');
            }else
            {
                Auth::logout();
                return redirect()->route('user.signup');
            }


            //user logged in

        }

            return redirect()->back()->with('message', 'invalid user info.');
        }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login');
    }
}
