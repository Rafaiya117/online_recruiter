@extends('backend.master_three')

@section('content')
    <div class="row" style="margin-top: 30px;">
        <div class="col-md-3" style="background-color: lightblue; padding: 10px; margin-right: 20px">
            <h1>Total Post Jobs</h1>
            <p><h4>{{$post__jobs_count}}</h4></p>
        </div>
        <div class="col-md-3" style="background-color: floralwhite; padding: 10px; margin-right: 20px">
            <h1>Total User</h1>
            <p><h4>{{$user_count}}</h4></p>
        </div>
        <div class="col-md-3" style="background-color: floralwhite; padding: 10px; margin-right: 20px">
            <h1>Total Application</h1>
            <p><h4>{{$cv_count}}</h4></p>
        </div>



    </div>

@endsection
