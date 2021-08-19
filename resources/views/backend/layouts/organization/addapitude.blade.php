@extends('backend.master_three')

@section('content')
    <tbody>
    @foreach($questions as $question)
        <tr>
            <th scope="row">{{$question->id}}</th>
            <td>{{$question->question}}</td>
        </tr>

       @endforeach
   </tbody>
    {{$questions->links('pagination::bootstrap-4')}}

    <form action="{{route('organization.addapitude')}}" method="post">
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
