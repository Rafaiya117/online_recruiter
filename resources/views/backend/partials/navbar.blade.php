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
            <li>
                <a class="nav-link" href="{{route('organization.add_AgricultureQues')}}">
                    <i class="fas fa-plus"></i>
                    <p>Add Apitude Question</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('organization.addpersonality')}}">
                    <i class="fas fa-plus"></i>
                    Add Personality Question
                </a>
            </li>



            <li>
                <a class="nav-link" href="./typography.html">
                    <i class="fas fa-file"></i>
                    <p>Resume</p>
                </a>
            </li>


        </ul>
    </div>
</div>
