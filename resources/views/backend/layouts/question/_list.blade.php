@extends('backend.master_three')

@section('content')

    <tbody>
    @foreach($questions as $question)
        <tr>
            <th scope="col">{{$question->id}}</th>

            <td>{{$question->question}}</td>

        </tr>

    @endforeach
    </tbody>
    {{$questions->links('pagination::bootstrap-4')}}


@endsection
