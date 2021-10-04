@extends('backend.master')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
            <th scope="col">Cv</th>
        </tr>
        </thead>

        <tbody>
        @foreach($applies as $apply)
            <tr>
                <th >{{$apply->id}}</th>
                <td scope="col">{{$apply->name}}</td>
                <td scope="col">{{$apply->email}}</td>
                <td scope="col">{{$apply->message}}</td>
                <td scope="col">
                    <iframe src="{{url('/uploads/'.$apply->file)}}"></iframe>
                </td>
                <td><a class="btn btn-danger" href="{{url('/uploads/'.$apply->file)}}" target="_blank">View</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$applies->links('pagination::bootstrap-4')}}

@endsection
