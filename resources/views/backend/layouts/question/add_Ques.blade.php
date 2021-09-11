@extends('backend.master_three')

@section('content')

    <form action="{{route('question.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter Question</label>
            <input name="question" id="name" type="text" class="form-control" placeholder="Question">
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input name="answar1" id="name" type="text" class="form-control" placeholder="Answar">
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input name="answar2" id="name" type="text" class="form-control" placeholder="Answar">
        </div>
        <div class="form-group">
            <label for="name"></label>
            <input name="answar3" id="name" type="text" class="form-control" placeholder="Answar">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
