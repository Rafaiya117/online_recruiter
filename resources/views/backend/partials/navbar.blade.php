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
                <a class="nav-link" href="{{route('organization.addDetails')}}" >
                    <i class="fas fa-cog"></i>
                    <p>Add Details</p>
                </a>

            </li>

            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
                    <i class="fas fa-caret-down"></i>
                    Questions
                </a>
                <div class="collapse" id="pagesExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('organization.add_AgricultureQues')}}">
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


            <li>
                <a class="nav-link" href="./typography.html">
                    <i class="fas fa-file"></i>
                    <p>Resume</p>
                </a>
            </li>
        </ul>
    </div>
</div>
