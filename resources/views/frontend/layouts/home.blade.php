@extends('frontend.master')

@section('content')

    <section class="home-section section-hero overlay bg-image" style="background-image: {{url('/images/hero_1.jpg')}};" id="home-section">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12">
                    <div class="mb-5 text-center">
                        <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate est, consequuntur perferendis.</p>
                    </div>
                    <form method="post" class="search-jobs-form">
                        <div class="row mb-5">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <input type="text" class="form-control form-control-lg" placeholder="Job title, Company...">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Region">
                                    <option>Anywhere</option>
                                    <option>San Francisco</option>
                                    <option>Palo Alto</option>
                                    <option>New York</option>
                                    <option>Manhattan</option>
                                    <option>Ontario</option>
                                    <option>Toronto</option>
                                    <option>Kansas</option>
                                    <option>Mountain View</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Job Type">
                                    <option>Part Time</option>
                                    <option>Full Time</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search Job</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 popular-keywords">
                                <h3>Trending Keywords:</h3>
                                <ul class="keywords list-unstyled m-0 p-0">
                                    <li><a href="#" class="">UI Designer</a></li>
                                    <li><a href="#" class="">Python</a></li>
                                    <li><a href="#" class="">Developer</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <a href="#next" class="scroll-button smoothscroll">
            <span class=" icon-keyboard_arrow_down"></span>
        </a>

    </section>



    <section class="site-section">
        <div class="container">

            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">

                </div>
            </div>

            <ul class="job-listings mb-5">
                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                    <a href="job-single.html"></a>

                    <div class="job-listing-logo">
                        <img src="{{url('frontend/images/job_logo_1.jpg')}}" alt="Free Website Template by Free-Template.co" class="img-fluid">
                    </div>

                    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                            <h2>Product designer</h2>
                            <strong>Adidas</strong>
                        </div>
                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                            <span class="icon-room"></span> New York, New York
                        </div>
                        <div class="job-listing-meta">
                            <span class="badge badge-danger">Part Time</span>
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
                            <h2>Digital Marketing Director</h2>
                            <strong>Sprint</strong>
                        </div>
                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                            <span class="icon-room"></span> Overland Park, Kansas
                        </div>
                        <div class="job-listing-meta">
                            <span class="badge badge-success">Full Time</span>
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
                            <h2>Back-end Engineer (Python)</h2>
                            <strong>Amazon</strong>
                        </div>
                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                            <span class="icon-room"></span> Overland Park, Kansas
                        </div>
                        <div class="job-listing-meta">
                            <span class="badge badge-success">Full Time</span>
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
                            <h2>Senior Art Director</h2>
                            <strong>Microsoft</strong>
                        </div>
                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                            <span class="icon-room"></span> Anywhere
                        </div>
                        <div class="job-listing-meta">
                            <span class="badge badge-success">Full Time</span>
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
                            <h2>Product Designer</h2>
                            <strong>Puma</strong>
                        </div>
                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                            <span class="icon-room"></span> New York
                        </div>
                        <div class="job-listing-meta">
                            <span class="badge badge-success">Full Time</span>
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
                            <h2>Product Designer</h2>
                            <strong>Adidas</strong>
                        </div>
                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                            <span class="icon-room"></span> New York, New York
                        </div>
                        <div class="job-listing-meta">
                            <span class="badge badge-danger">Part Time</span>
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
                            <h2>Digital Marketing Director</h2>
                            <strong>Sprint</strong>
                        </div>
                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                            <span class="icon-room"></span> Overland Park, Kansas
                        </div>
                        <div class="job-listing-meta">
                            <span class="badge badge-success">Full Time</span>
                        </div>
                    </div>
                </li>
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
