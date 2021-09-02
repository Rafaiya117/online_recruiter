@extends('backend.master_three')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Question</th>
        </tr>
        </thead>

    <tbody>
    @foreach($questions as $question)
        <tr>
            <th >{{$question->id}}</th>
            <td scope="col">{{$question->question}}</td>
            <td><a class="btn btn-deep-purple-accent">Edit</a></td>
            <td><a class="btn btn-danger">Delete</a></td>
        </tr>
    @endforeach
    </tbody>
    </table>
    {{$questions->links('pagination::bootstrap-4')}}


@endsection
