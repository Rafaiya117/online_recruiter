<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
}
