@extends('frontend.master')
@section('content')
<style>
    body {
        width: 100%;
        height:100%;
        font-family: 'Open Sans', sans-serif;
        background: #092756;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
        background-image: url('https://images.unsplash.com/photo-1497366216548-37526070297c?ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8b2ZmaWNlfGVufDB8fDB8&ixlib=rb-1.2.1&w=1000&q=80');
        background-position:center ;
        background-size: cover;
    }
</style>
<body>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card-body p-5 text-center">
            <br>
        <form action="{{route('reqorg.post_job.store')}}" type="form" method="Post">
            @csrf
            <div class="mb-3">
                <label for="organization_name" class="form-label">Organization_name</label>
                <input type="text" class="form-control" id="organization_name" name="organization_name" placeholder="Enter name">
            </div>

            <div class="mb-3">
                <label for="organization_address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="organization_address" placeholder="Enter address">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="organization_email" placeholder="Enter your email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="organization_mobile" class="form-label">Mobile</label>
                <input placeholder="Enter your mobile number" type="text" class="form-control" id="organization_mobile" name="organization_mobile">
            </div>

            <div class="mb-3">
                <label for="job_name" class="form-label">Job_name</label>
                <input placeholder="Enter" type="text" class="form-control" id="job_name" name="job_name">

            </div>

            <div>
                <label for="position" class="form-label">Position</label>
                <input placeholder="Enter position" type="text" class="form-control" id="position" name="position">
            </div>

            <div>
                <label for="description" class="form-label">Description</label>
                <input placeholder="Enter description" type="text" class="form-control" id="description" name="description">
            </div>

            <div>
                <label for="salary" class="form-label">Salary</label>
                <input placeholder="Enter salary" type="decimal" class="form-control" id="salary" name="salary">
            </div>

            <div>
                <label for="responsibilities" class="form-label">Responsibilities</label>
                <input placeholder="Enter responsibilities" type="text" class="form-control" id="responsibilities" name="responsibilities">
            </div>

            <div>
                <label for="skill" class="form-label">Skill</label>
                <input placeholder="Enter skill" type="text" class="form-control" id="skill" name="skill">
            </div>

            <div>
                <label for="education" class="form-label">Position</label>
                <input placeholder="Enter education" type="text" class="form-control" id="education" name="position">
            </div>

            <div>
                <label for="education" class="form-label">Education</label>
                <input placeholder="Enter education" type="text" class="form-control" id="education" name="education">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
</body>
@endsection
