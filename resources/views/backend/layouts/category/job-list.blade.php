@extends('backend.master_three')

@section('content')

    <h2>Job category</h2>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody>
        {{--categories--}}
        {{--@dd($categories)--}}
        @foreach($jobs as $key=>$data)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->description}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
