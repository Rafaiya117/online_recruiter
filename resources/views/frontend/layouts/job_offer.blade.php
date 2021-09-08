@extends('frontend.master')

   @section('content')


    <!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/frontend/css/A.style.css.pagespeed.cf.XgDbNFMzAt.css')}}">
</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table table-striped">
                        <thead>
                        <tr>

                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Email</th>
                            <th scope="col">Job_Type</th>
                            <th scope="col">Position</th>
                            <th scope="col">Salary</th>
                            <th scope="col">Responsibilities</th>
                            <th scope="col">Skill</th>
                            <th scope="col">Education</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($post__jobs as $post__job)
                            <tr>

                                <td scope="col">{{$post__job->organization_name}}</td>
                                <td>{{$post__job->organization_address}}</td>
                                <td>{{$post__job->organization_email}}</td>
                                <td>{{$post__job->job_name}}</td>
                                <td>{{$post__job->position}}</td>
                                <td>{{$post__job->salary}}</td>
                                <td>{{$post__job->responsibilities}}</td>
                                <td>{{$post__job->skill}}</td>
                                <td>{{$post__job->education}}</td>
                                <td><a class="btn btn-success">Apply</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{url('/frontend/js/jquery.min.js')}}"></script>
<script src="{{url('/frontend/js/popper.js+bootstrap.min.js+main.js.pagespeed.jc.eF4oxXGybC.js')}}"></script><script>eval(mod_pagespeed_1ubagWZVDG);</script>
<script>eval(mod_pagespeed_sHeX_56lIR);</script>
<script>eval(mod_pagespeed_v54rJ2Fspg);</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"68b59b25bf0d48dc","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.8.1","si":10}'></script>
</body>
</html>



@endsection
