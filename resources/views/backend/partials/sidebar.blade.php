<nav class="dash-nav-list">
    <a href="index.html" class="dash-nav-item">
        <i class="fas fa-home"></i> Dashboard </a>
    <div class="dash-nav-dropdown">
        <a href="#" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="fas fa-file"></i> View Question </a>
        <div class="dash-nav-dropdown-menu">
            <a href="{{route('question.Agriculture_list')}}" class="dash-nav-dropdown-item"><i class="fas fa-pen">Agriculture Question</i></a>
            <a href="{{route('question.personality_list')}}" class="dash-nav-dropdown-item"><i class="fas fa-pen">Personality Question</i></a>

        </div>
    </div>
    <div class="dash-nav-dropdown ">
        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="fas fa-building"></i>View Details </a>
        <div class="dash-nav-dropdown-menu">
            <a href="{{route('details.organization')}}" class="dash-nav-dropdown-item"><i class="fas fa-arrow-right"> Organization Details</i></a>
            <a href="{{route('details.job')}}" class="dash-nav-dropdown-item"><i class="fas fa-arrow-right"> Job Details</i></a>
            <a href="{{route('details.requirement')}}" class="dash-nav-dropdown-item"><i class="fas fa-arrow-right"> Requirement Details</i></a>

        </div>
    </div>
    <div class="dash-nav-dropdown">
        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="fas fa-user"></i>View Candidates </a>
        <div class="dash-nav-dropdown-menu">
            <a href="{{route('candidates.personal')}}" class="dash-nav-dropdown-item"><i class="fas fa-star"> Personal Information</i></a>
            <a href="{{route('candidates.passed')}}" class="dash-nav-dropdown-item"><i class="fas fa-star"> Passed Candidates</i></a>
            <a href="{{route('candidates.failed')}}" class="dash-nav-dropdown-item"><i class="fas fa-star"> Failed Candidates</i></a>
            <a href="{{route('candidates.selected')}}" class="dash-nav-dropdown-item"><i class="fas fa-star"> Selected Candidates</i></a>
            <a href="{{route('candidates.resume')}}" class="dash-nav-dropdown-item"><i class="fas fa-star"> Resume</i></a>
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
