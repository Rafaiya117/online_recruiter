<div class="sidebar" data-image="{{url('/img/sidebar-5.jpg')}}">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="https://www.creative-tim.com" class="simple-text">
                Online Job_Recruiter
            </a>
        </div>
        <ul class="nav">
            <li class="dropdown nav-item active">
                <a class="nav-link" href="{{route('dashboard')}}" >
                    <i class="fas fa-cog"></i>
                    <p>Dashboard</p>
                </a>
            </li>

{{--            <li class="dropdown nav-item active">--}}
{{--                <a class="nav-link" href="{{route('organization.post_job')}}" >--}}
{{--                    <i class="fas fa-plus-circle"></i>--}}
{{--                    <p>Post Job</p>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li class="nav-item ">--}}
{{--                <a class="nav-link" data-toggle="collapse" href="#questions">--}}
{{--                    <i class="fas fa-caret-down"></i>--}}
{{--                    Questions--}}
{{--                </a>--}}


            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#viewdetails">
                    <i class="fas fa-caret-down"></i>
                    View Details
                </a>
                <div class="collapse" id="viewdetails">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('organization.org_registration')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal"> Organization Registration Details </span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('details.candidatelist')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal"> Applicants Details </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('category.list')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal"> Job Details </span>
                            </a>
                        </li>


                    </ul>
                </div>


{{--            <li class="nav-item ">--}}
{{--                <a class="nav-link" data-toggle="collapse" href="#questionlist">--}}
{{--                    <i class="fas fa-caret-down"></i>--}}
{{--                    Question List--}}
{{--                </a>--}}
{{--                <div class="collapse" id="questionlist">--}}
{{--                    <ul class="nav">--}}
{{--                        <li class="nav-item ">--}}
{{--                            <a class="nav-link" href="{{route('question._list')}}">--}}
{{--                                <span class="sidebar-mini"></span>--}}
{{--                                <span class="sidebar-normal">List</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item ">--}}
{{--                            <a class="nav-link" href="#">--}}
{{--                                <span class="sidebar-mini"></span>--}}
{{--                                <span class="sidebar-normal"> #</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item ">--}}
{{--                            <a class="nav-link" href="#">--}}
{{--                                <span class="sidebar-mini"></span>--}}
{{--                                <span class="sidebar-normal"> # </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item ">--}}
{{--                            <a class="nav-link" href="#">--}}
{{--                                <span class="sidebar-mini"></span>--}}
{{--                                <span class="sidebar-normal"> # </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

{{--            <li>--}}
{{--                <a class="nav-link" href="{{route('category.list')}}">--}}
{{--                    <i class="fas fa-file"></i>--}}
{{--                    <p>Category</p>--}}
{{--                </a>--}}
{{--            </li>--}}

            <li>
                <a class="nav-link" href="{{route('user.list')}}">
                    <i class="fas fa-file"></i>
                    <p>User List</p>
                </a>
            </li>

            <li>
                <a class="nav-link" href="{{route('report')}}">
                    <i class="fas fa-file"></i>
                    <p>Report</p>
                </a>
            </li>

        </ul>
    </div>
</div>
