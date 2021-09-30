@extends('backend.master_three')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Name</th>
            <th scope="col">Mobile</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
        </tr>
        </thead>

        <tbody>
        @foreach($req_orgs as $req_org)
            <tr>
                <th >{{$req_org->id}}</th>
                <td scope="col">{{$req_org->name}}</td>
                <td>{{$req_org->mobile}}</td>
                <td>{{$req_org->email}}</td>
                <td>{{$req_org->status}}</td>
                <td><a class="btn btn-deep-purple-accent" href="{{route('request.accept',$req_org->id)}}">Accept</a></td>
                <td><a class="btn btn-danger">Reject</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$req_orgs->links('pagination::bootstrap-4')}}


@endsection
