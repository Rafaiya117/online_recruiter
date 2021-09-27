@extends('frontend.master')

@section('content')


    <section class="vh-100" style="background-color: #2779e2;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-9">
                <br>
                <br>
                <form action="{{route('user.apply.store')}}" type="form" method="Post" enctype="multipart/form-data">
                    @csrf
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body">
                        <div class="row align-items-center pt-4 pb-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Full name</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <input type="text" class="form-control form-control-lg" name="name" id="name"/>

                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Email address</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <input type="email" class="form-control form-control-lg" placeholder="email" name="email" id="email" />

                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Message</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <textarea class="form-control" rows="3" placeholder="Message sent to the employer"name="message" id="message"></textarea>

                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Upload CV</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <input name="file" class="form-control form-control-lg" id="file" type="file" />
                                <div class="small text-muted mt-2" name="file" id="file">Upload your CV/Resume or any other relevant file. Max file size 50 MB</div>
                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="px-5 py-4">
                            <button type="submit" class="btn btn-primary btn-lg">Send application</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
