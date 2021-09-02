<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Req_org;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function job(){
        return view('backend.layouts.details.job',);
    }
    public function organization(){
        return view('backend.layouts.details.organization',);
    }
    public function requirement(){
        return view('backend.layouts.details.requirement',);
    }
    public function ORG_Registration(){

        $req_orgs= Req_org::paginate(10);

        return view('backend.layouts.details.org_registration',compact('req_orgs'));
    }
}
