@extends('frontend.master')

@section('content')

    <section class="site-section">
        <div class="container">

            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">

                </div>
            </div>

            <ul class="job-listings mb-5">
                {{--                loop start--}}
                @foreach($post__jobs as $post__job)
                    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                        <a href="job-single.html"></a>

                        <div class="job-listing-logo">
                            <img src="{{url('frontend/images/job_logo_1.jpg')}}" alt="Free Website Template by Free-Template.co" class="img-fluid">
                        </div>

                        <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                            <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                                <h2>{{$post__job->job_name}}</h2>
                                <strong>{{$post__job->organization_name}}</strong>
                            </div>
                            <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                <span class="icon-room"></span> {{$post__job->organization_address}}
                            </div>
                            <div class="job-listing-meta">
                                <span class="badge badge-danger">Part Time</span>
                            </div>
                            <div class="job-listing-meta">

                                <span class="badge badge-info">Apply</span>

                            </div>
                        </div>

                    </li>
                    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                        <a href="job-single.html"></a>
                        <div class="job-listing-logo">
                            <img src="{{url('frontend/images/job_logo_2.jpg')}}" alt="Free Website Template by Free-Template.co" class="img-fluid">
                        </div>

                        <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                            <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                                <h2>{{$post__job->job_name}}</h2>
                                <strong>{{$post__job->organization_name}}</strong>
                            </div>
                            <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                <span class="icon-room"></span> {{$post__job->organization_address}}
                            </div>
                            <div class="job-listing-meta">
                                <span class="badge badge-success">Full Time</span>
                            </div>
                            <div class="job-listing-meta">

                                <span class="badge badge-info">Apply</span>
                            </div>
                        </div>
                    </li>

                    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                        <a href="job-single.html"></a>
                        <div class="job-listing-logo">
                            <img src="{{url('frontend/images/job_logo_3.jpg')}}" alt="Free Website Template by Free-Template.co" class="img-fluid">
                        </div>

                        <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                            <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                                <h2>{{$post__job->job_name}}</h2>
                                <strong>{{$post__job->organization_name}}</strong>
                            </div>
                            <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                <span class="icon-room"></span> {{$post__job->organization_address}}
                            </div>
                            <div class="job-listing-meta">
                                <span class="badge badge-success">Full Time</span>
                            </div>
                            <div class="job-listing-meta">

                                <span class="badge badge-info">Apply</span>

                            </div>
                        </div>
                    </li>

                    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                        <a href="job-single.html"></a>
                        <div class="job-listing-logo">
                            <img src="{{url('frontend/images/job_logo_4.jpg')}}" alt="Free Website Template by Free-Template.co" class="img-fluid">
                        </div>

                        <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                            <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                                <h2>{{$post__job->job_name}}</h2>
                                <strong>{{$post__job->organization_name}}</strong>
                            </div>
                            <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                <span class="icon-room"></span> {{$post__job->organization_address}}
                            </div>
                            <div class="job-listing-meta">
                                <span class="badge badge-success">Full Time</span>
                            </div>
                            <div class="job-listing-meta">

                                <span class="badge badge-info">Apply</span>

                            </div>
                        </div>
                    </li>

                    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                        <a href="job-single.html"></a>
                        <div class="job-listing-logo">
                            <img src="{{url('frontend/images/job_logo_5.jpg')}}" alt="Free Website Template by Free-Template.co" class="img-fluid">
                        </div>

                        <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                            <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                                <h2>{{$post__job->job_name}}</h2>
                                <strong>{{$post__job->organization_name}}</strong>
                            </div>
                            <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                <span class="icon-room"></span> {{$post__job->organization_address}}
                            </div>
                            <div class="job-listing-meta">
                                <span class="badge badge-success">Full Time</span>
                            </div>
                            <div class="job-listing-meta">

                                <span class="badge badge-info">Apply</span>

                            </div>
                        </div>
                    </li>
                    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                        <a href="job-single.html"></a>
                        <div class="job-listing-logo">
                            <img src="{{url('frontend/images/job_logo_1.jpg')}}" alt="Free Website Template by Free-Template.co" class="img-fluid">
                        </div>

                        <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                            <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                                <h2>{{$post__job->job_name}}</h2>
                                <strong>{{$post__job->organization_name}}</strong>
                            </div>
                            <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                <span class="icon-room"></span> {{$post__job->organization_address}}
                            </div>
                            <div class="job-listing-meta">
                                <span class="badge badge-danger">Part Time</span>
                            </div>
                            <div class="job-listing-meta">

                                <span class="badge badge-info">Apply</span>

                            </div>
                        </div>

                    </li>
                    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                        <a href="job-single.html"></a>
                        <div class="job-listing-logo">
                            <img src="{{url('frontend/images/job_logo_2.jpg')}}" alt="Free Website Template by Free-Template.co" class="img-fluid">
                        </div>

                        <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                            <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                                <h2>{{$post__job->job_name}}</h2>
                                <strong>{{$post__job->organization_name}}</strong>
                            </div>
                            <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                <span class="icon-room"></span> {{$post__job->organization_address}}
                            </div>
                            <div class="job-listing-meta">
                                <span class="badge badge-success">Full Time</span>
                            </div>
                            <div class="job-listing-meta">

                                <span class="badge badge-info">Apply</span>

                            </div>
                        </div>
                    </li>
                    {{--                loop end--}} @endforeach
            </ul>




            <div class="row pagination-wrap">
                <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
                    <span>Showing 1-7 Of 43,167 Jobs</span>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="custom-pagination ml-auto">
                        <a href="#" class="prev">Prev</a>
                        <div class="d-inline-block">
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                        </div>
                        <a href="{{route('user.job_offer')}}" class="next">Next</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
