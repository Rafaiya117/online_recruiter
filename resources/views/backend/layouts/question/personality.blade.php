@extends('backend.master')

@section('content')

    <form action="{{route('question.personality')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter Question</label>
            <input name="question" id="name" type="text" class="form-control" placeholder="Question">
        </div>

        <div class="form-group">
            <label for="name">Enter Question</label>
            <input name="question" id="name" type="text" class="form-control" placeholder="Question">
        </div>

        <div class="form-group">
            <label for="name">Enter Question</label>
            <input name="question" id="name" type="text" class="form-control" placeholder="Question">
        </div>

        <div class="form-group">
            <label for="name">Enter Question</label>
            <input name="question" id="name" type="text" class="form-control" placeholder="Question">
        </div>

        <div class="form-group">
            <label for="name">Enter Question</label>
            <input name="question" id="name" type="text" class="form-control" placeholder="Question">
        </div>

        <div class="form-group">
            <label for="name">Enter Question</label>
            <input name="question" id="name" type="text" class="form-control" placeholder="Question">
        </div>

        <div class="form-group">
            <label for="name">Enter Question</label>
            <input name="question" id="name" type="text" class="form-control" placeholder="Question">
        </div>

        <div class="form-group">
            <label for="name">Enter Question</label>
            <input name="question" id="name" type="text" class="form-control" placeholder="Question">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection