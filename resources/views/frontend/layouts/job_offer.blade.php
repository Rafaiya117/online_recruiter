@extends('frontend.master')
@section('content')
    <div class="card-deck mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            @foreach($post__jobs as $post__job)
            <div class="col-md-4">
                <img src="{{url('/uploads/'.$post__job->image)}}" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title text-black">Name: {{$post__job->organization_name}}</h5>
                    <p class="card-text text-black">Address: {{$post__job->organization_address}}</p>
                    <p class="card-text "><small class="text-black">Position: {{$post__job->position}}</small></p>
                    <p class="card-text"><small class="text-black">Description: {{$post__job->description}}</small></p>
                    <p class="card-text"><small class="text-black">Responsibilities: {{$post__job->responsibilities}}</small></p>
                    <p class="card-text"><small class="text-black">Skill: {{$post__job->skill}}</small></p>
                    <p class="card-text"><small class="text-black">Qualification: {{$post__job->education}}</small></p>
                    <p class="card-text"><small class="text-black">Type: {{$post__job->type}}</small></p>
                    <p class="card-text"><small class="text-black">Salary: {{$post__job->salary}}</small></p>
                    <a class="btn btn-success" href="{{route('user.apply')}}">Apply</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{$post__jobs->links('pagination::bootstrap-4')}}
@endsection
