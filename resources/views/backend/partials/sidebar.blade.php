<nav class="dash-nav-list">
    <a href="index.html" class="dash-nav-item">
        <i class="fas fa-home"></i> Dashboard </a>
    <div class="dash-nav-dropdown">
        <a href="#" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="fas fa-file"></i> Question </a>
        <div class="dash-nav-dropdown-menu">
            <a href="{{route('question.apitude')}}" class="dash-nav-dropdown-item"><i class="fas fa-plus"> Apitude Question</i></a>
            <a href="{{route('question.personality')}}" class="dash-nav-dropdown-item"><i class="fas fa-plus"> Personality Question</i></a>

        </div>
    </div>
    <div class="dash-nav-dropdown ">
        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="fas fa-building"></i> Details </a>
        <div class="dash-nav-dropdown-menu">
            <a href="{{route('details.organization')}}" class="dash-nav-dropdown-item"><i class="fas fa-arrow-right"> Organization Details</i></a>
            <a href="{{route('details.job')}}" class="dash-nav-dropdown-item"><i class="fas fa-arrow-right"> Job Details</i></a>
            <a href="{{route('details.requirement')}}" class="dash-nav-dropdown-item"><i class="fas fa-arrow-right"> Requirement Details</i></a>

        </div>
    </div>
    <div class="dash-nav-dropdown">
        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="fas fa-user"></i> Candidates </a>
        <div class="dash-nav-dropdown-menu">
            <a href="blank.html" class="dash-nav-dropdown-item">Personal Information</a>
            <a href="content.html" class="dash-nav-dropdown-item">Passed Candidates</a>
            <a href="content.html" class="dash-nav-dropdown-item">Failed Candidates</a>
            <a href="login.html" class="dash-nav-dropdown-item">Selected Candidates</a>
            <a href="signup.html" class="dash-nav-dropdown-item">Resume</a>
        </div>
    </div>
    <div class="dash-nav-dropdown">
        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="fas fa-info"></i> About </a>
        <div class="dash-nav-dropdown-menu">
            <a href="#" target="_blank" class="dash-nav-dropdown-item">*</a>
            <a href="#" target="_blank" class="dash-nav-dropdown-item">*</a>
        </div>
    </div>
</nav>
