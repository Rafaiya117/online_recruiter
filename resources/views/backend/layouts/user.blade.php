@extends('backend.master_three')

@section('content')

    <h2>User List</h2>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User Name</th>
            <th scope="col">Email</th>
            <th scope="col">Type</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $data)
            <tr>
                <th scope="row">#</th>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->role}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
