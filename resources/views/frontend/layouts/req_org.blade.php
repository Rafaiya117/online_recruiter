@extends('backend.master_three')

@section('content')
   <style>
       form { margin: 0px 10px; }

       h2 {
           margin-top: 2px;
           margin-bottom: 2px;
       }

       .container { max-width: 360px; }

       .divider {
           text-align: center;
           margin-top: 20px;
           margin-bottom: 5px;
       }

       .divider hr {
           margin: 7px 0px;
           width: 35%;
       }

       .left { float: left; }

       .right { float: right; }

   </style>

    <div class="container">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-body">

                    <form action="{{route('reqorg.req_org.store')}}" type="form" method="Post">
                        @csrf
                        <div class="form-group">
                            <h2>Create account</h2>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="organization_name">organization_name</label>
                            <input name="organization_name" id="organization_name" type="text" maxlength="50" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="organization_email">"organization_email</label>
                            <input name="organization_email" id="organization_email" type="email" maxlength="50" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="organization_mobile">organization_mobile</label>
                            <input name="organization_mobile" id="organization_mobile" type="mobile_number" maxlength="50" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="signupPassword">Password</label>
                            <input id="signupPassword" type="password" maxlength="25" class="form-control" placeholder="at least 6 characters" length="40">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="signupPasswordagain">Password again</label>
                            <input id="signupPasswordagain" type="password" maxlength="25" class="form-control">
                        </div>
                        <div class="form-group">
                            <button id="signupSubmit" type="submit" class="btn btn-info btn-block">Create your account</button>
                        </div>
                        <p class="form-group">By creating an account, you agree to our <a href="#">Terms of Use</a> and our <a href="#">Privacy Policy</a>.</p>
                        <hr>
                        <p></p>Already have an account? <a href="#">Sign in</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
