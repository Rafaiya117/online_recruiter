<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apply;

class DetailsController extends Controller
{
   public function candidatelist(){

       $applies =Apply::paginate(10);

       return view('backend.layouts.details.candidatelist',compact('applies'));
   }

   public  function view($file){

 return response()->download('uploads/'.$file);
   }
}
