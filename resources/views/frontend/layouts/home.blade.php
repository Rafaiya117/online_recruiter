@extends('frontend.master')

@section('content')

    <section class="home-section section-hero overlay bg-image" style="background-image: {{url('/images/hero_1.jpg')}};" id="home-section">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12">
                    <div class="mb-5 text-center">
                        <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job</h1>
                        <p></p>
                    </div>
                    <form method="get" class="search-jobs-form" action="{{route('user.search')}}">
                        <div class="row mb-5">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">

                                <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Job Type" name="query" type="search" >
                                    @foreach($post__jobs as $post__job)
                                        <option>{{$post__job->organization_address}}</option>
                                    @endforeach
                                </select>


                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">

                                <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Job Type" name="query" type="search">
                                    @foreach($post__jobs as $post__job)
                                        <option>{{$post__job->type}}</option>
                                    @endforeach
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
            <h3>Browse Category</h3>
            <div class="row">
            <div class="card  col-md-12 col-sm-10">

                    <ol><a href="{{route('user.job_offer')}}"><i class="fas fa-arrow-right">IT</i></a></ol>
                <ol><a href="#"><i class="fas fa-arrow-right">Developer</i></a></ol>
                <ol><a href="#"><i class="fas fa-arrow-right">Communication</i></a></ol>
                <ol><a href="#"><i class="fas fa-arrow-right">Developer</i></a></ol>
                <ol><a href="#"><i class="fas fa-arrow-right">Communication</i></a></ol>

            </div>
            </div>
        </div>

    </section>
    {{$post__jobs->links('pagination::bootstrap-4')}}
@endsection
