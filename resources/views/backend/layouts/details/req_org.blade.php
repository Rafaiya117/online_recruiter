
   <style>
       form { margin: 0px 10px;
           position: absolute;
           top: 20%;
           left: 50%;
           margin: -150px 0 0 -150px;
           width:300px;
           height:300px;
       }

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
       body{
           background-image: url('https://media.istockphoto.com/photos/minimalist-office-with-city-view-picture-id1198804581?k=20&m=1198804581&s=612x612&w=0&h=FQ59bGTwb3L2m2J1gRT77A0D0kH7LwSKErsFL4aPPAc=');
           background-position:center ;
           background-size: cover;
       }
       input {
           width: 100%;
           margin-bottom: 10px;
           background: rgba(0,0,0,0.3);
           border: 2px;
           outline: 2px;
           padding: 10px;
           font-size: 13px;
           color: #fff;
           text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
           border: 1px solid rgba(0,0,0,0.3);
           border-radius: 4px;
           box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
           -webkit-transition: box-shadow .5s ease;
           -moz-transition: box-shadow .5s ease;
           -o-transition: box-shadow .5s ease;
           -ms-transition: box-shadow .5s ease;
           transition: box-shadow .10s ease;

       }
       input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }


   </style>

    <div class="container">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-body">

                    <form action="{{route('details.req_org.store')}}" type="form" method="Post">
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



