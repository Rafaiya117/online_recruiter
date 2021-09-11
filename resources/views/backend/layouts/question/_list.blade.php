@extends('backend.master_three')

@section('content')


    <a href="{{route('question.add_Ques')}}" class="btn btn-info">
        <i class="bi bi-list-nested"></i>
        Create New Category</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Question</th>
            <th scope="col">Answar1</th>
            <th scope="col">Answar2</th>
            <th scope="col">Answar3</th>
        </tr>
        </thead>

    <tbody>
    @foreach($questions as $question)
        <tr>
            <th >{{$question->id}}</th>
            <td scope="col">{{$question->question}}</td>
            <td scope="col">{{$question->answar1}}</td>
            <td scope="col">{{$question->answar2}}</td>
            <td scope="col">{{$question->answar3}}</td>
            <td><a class="btn btn-deep-purple-accent">Edit</a></td>
            <td><a class="btn btn-danger">Delete</a></td>
        </tr>
    @endforeach
    </tbody>
    </table>
    {{$questions->links('pagination::bootstrap-4')}}


@endsection
