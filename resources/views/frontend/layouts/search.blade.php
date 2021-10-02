@extends('frontend.master')

@section('content')

    <table class="table">
        <thead>
        <tr>

            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Job</th>
            <th scope="col">Type</th>
        </tr>
        </thead>

        <tbody>
        @foreach($post__jobs as $post)
            <tr>

                <td scope="col">{{$post->organization_name}}</td>
                <td scope="col">{{$post->organization_address}}</td>
                <td scope="col">{{$post->job_name}}</td>
                <td scope="col">{{$post->type}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

























