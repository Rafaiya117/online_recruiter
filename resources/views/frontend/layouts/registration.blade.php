@extends('frontend.master')
@section('content')
    <style>
        body{
            background-image: url('https://media.istockphoto.com/photos/workplace-in-panoramic-office-with-new-york-evening-view-picture-id489110144?k=6&m=489110144&s=612x612&w=0&h=53aKF4-hpZVoTV7EgU_Iy1pVJgvEzEmAW1iHSi0rgoI=');
            background-size: cover;
        }
    </style>
<div class="container"><br><br><br><br>
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-body card">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <form action="{{route('user.registration.store')}}" type="form" method="Post">
                    @csrf
                    <div class="form-group">
                        <h2>Create account</h2>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="organization_name">Name</label>
                        <input name="organization_name" id="organization_name" type="text" maxlength="50" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="organization_email">Email</label>
                        <input name="organization_email" id="organization_email" type="email" maxlength="50" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="organization_mobile">Mobile</label>
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

                </form>
            </div>
        </div>
    </div>
</div>
@endsection

