@extends('backend.mastertwo')

@section('content')

    <ul>
        <li style="float:right"><a class="active" href="#">Sign in</a></li>
        <li style="float:right"><a class="active" href="#">Sign Up</a></li>

    </ul>


<div class="card">
    <h1>Browse Category</h1>
    <a href="#"><ol class="fas fa-angle-right">Software Engineering</ol></a>
    <a href="#"><ol class="fas fa-angle-right">Hardware Engineering</ol></a>
    <a href="#"><ol class="fas fa-angle-right">Web Development</ol></a>
    <a href="#"><ol class="fas fa-angle-right">Data Analyst</ol></a>
    <a href="#"><ol class="fas fa-angle-right">Business</ol></a>


</div>

@endsection
