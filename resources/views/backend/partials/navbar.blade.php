<div class="sidebar" data-image="{{url('/img/sidebar-5.jpg')}}">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="https://www.creative-tim.com" class="simple-text">
                Online Recruiter
            </a>
        </div>
        <ul class="nav">
            <li class="dropdown nav-item active">
                <a class="nav-link" href="#" >
                    <i class="fas fa-cog"></i>
                    <p>Dashboard</p>
                </a>

            </li>

            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#questions">
                    <i class="fas fa-caret-down"></i>
                    Questions
                </a>
                <div class="collapse" id="questions">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('organization.add_Ques')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal">Agriculture Question </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="../examples/pages/rtl.html">
                                <span class="sidebar-mini"> RS </span>
                                <span class="sidebar-normal"> RTL Support </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="../examples/pages/timeline.html">
                                <span class="sidebar-mini"> T </span>
                                <span class="sidebar-normal"> Timeline </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="../examples/pages/login.html">
                                <span class="sidebar-mini"> LP </span>
                                <span class="sidebar-normal"> Login Page </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="../examples/pages/register.html">
                                <span class="sidebar-mini"> RP </span>
                                <span class="sidebar-normal"> Register Page </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="../examples/pages/lock.html">
                                <span class="sidebar-mini"> LSP </span>
                                <span class="sidebar-normal"> Lock Screen Page </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="../examples/pages/user.html">
                                <span class="sidebar-mini"> UP </span>
                                <span class="sidebar-normal"> User Profile </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="../examples/pages/error.html">
                                <span class="sidebar-mini"> E </span>
                                <span class="sidebar-normal"> Error Page </span>
                            </a>
                        </li>
                    </ul>
                </div>

            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#viewdetails">
                    <i class="fas fa-caret-down"></i>
                    View Details
                </a>
                <div class="collapse" id="viewdetails">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('details.organization')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal">Organization Details </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('details.job')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal"> Job Details </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('details.requirement')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal"> Requirement Details </span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('details.org_registration')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal"> Organization Registration Details </span>
                            </a>
                        </li>

                    </ul>
                </div>


            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#questionlist">
                    <i class="fas fa-caret-down"></i>
                    Question List
                </a>
                <div class="collapse" id="questionlist">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('question._list')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal">List</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal"> #</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal"> # </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal"> # </span>
                            </a>
                        </li>
                    </ul>
                </div>

            <li>
                <a class="nav-link" href="{{route('category.list')}}">
                    <i class="fas fa-file"></i>
                    <p>Category</p>
                </a>
            </li>

            <li>
                <a class="nav-link" href="#">
                    <i class="fas fa-file"></i>
                    <p>Resume</p>
                </a>
            </li>
        </ul>
    </div>
</div>
