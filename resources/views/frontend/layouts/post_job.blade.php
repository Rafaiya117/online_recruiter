<style>

    body {
        width: 100%;
        height:100%;
        font-family: 'Open Sans', sans-serif;
        background: #092756;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
        background-image: url('https://images.unsplash.com/photo-1497366216548-37526070297c?ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8b2ZmaWNlfGVufDB8fDB8&ixlib=rb-1.2.1&w=1000&q=80');
        background-position:center ;
        background-size: cover;
    }

    input {
        width: 100%;
        margin-bottom: 10px;
        background: rgba(0,0,0,0.3);
        border: none;
        outline: none;
        padding: 10px;
        font-size: 13px;
        color: #fff;
        text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
        border: 1px solid rgba(0,0,0,0.3);
        border-radius: 4px;
        box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
        -webkit-transition: box-shadow .5s ease;
        -moz-transition: box-shadow .5s ease;
        -o-transition: box-shadow .5s ease;
        -ms-transition: box-shadow .5s ease;
        transition: box-shadow .10s ease;
    }
    input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

</style>




<h2>Post job</h2>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card-body p-5 text-center">
        <form action="{{route('reqorg.post_job.store')}}" type="form" method="Post">
            @csrf
            <div class="mb-3">
                <label for="organization_name" class="form-label">Organization_name</label>
                <input type="text" class="form-control" id="organization_name" name="organization_name" placeholder="Enter name">
            </div>

            <div class="mb-3">
                <label for="organization_address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="organization_address" placeholder="Enter address">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="organization_email" placeholder="Enter your email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="organization_mobile" class="form-label">Mobile</label>
                <input placeholder="Enter your mobile number" type="text" class="form-control" id="organization_mobile" name="organization_mobile">
            </div>

            <div class="mb-3">
                <label for="job_name" class="form-label">Job_name</label>
                <input placeholder="Enter" type="text" class="form-control" id="job_name" name="job_name">

            </div>

            <div>
                <label for="position" class="form-label">Position</label>
                <input placeholder="Enter position" type="text" class="form-control" id="position" name="position">
            </div>

            <div>
                <label for="description" class="form-label">Description</label>
                <input placeholder="Enter description" type="text" class="form-control" id="description" name="description">
            </div>

            <div>
                <label for="salary" class="form-label">Salary</label>
                <input placeholder="Enter salary" type="decimal" class="form-control" id="salary" name="salary">
            </div>

            <div>
                <label for="responsibilities" class="form-label">Responsibilities</label>
                <input placeholder="Enter responsibilities" type="text" class="form-control" id="responsibilities" name="responsibilities">
            </div>

            <div>
                <label for="skill" class="form-label">Skill</label>
                <input placeholder="Enter skill" type="text" class="form-control" id="skill" name="skill">
            </div>

            <div>
                <label for="education" class="form-label">Position</label>
                <input placeholder="Enter education" type="text" class="form-control" id="education" name="position">
            </div>

            <div>
                <label for="education" class="form-label">Education</label>
                <input placeholder="Enter education" type="text" class="form-control" id="education" name="education">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
