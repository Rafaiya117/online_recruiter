@extends('backend.master_three')

@section('content')

    <h2>Job category</h2>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody>
        {{--categories--}}
        {{--@dd($categories)--}}
        @foreach($post__jobs as $key=>$data)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$data->job_name}}</td>
                <td>{{$data->organization_address}}</td>
                <td>{{$data->organization_email}}</td>
                <td>{{$data->description}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
