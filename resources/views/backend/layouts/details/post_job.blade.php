@extends('backend.master_three')
@section('content')
<style>
    body {
        width: 100%;
        height:100%;
        font-family: 'Open Sans', sans-serif;
        background: #8cb9ff;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
        background-position:center ;
        background-size: cover;
    }
</style>
<body>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card-body p-5 text-center">
            <br>
        <form action="{{route('details.post_job.store')}}" type="form" method="Post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="product_name">Select Category</label>
                <select class="form-control" name="category_id" id="">
                    @foreach($categories as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class=" card mb-3">
                       <label for="organization_name" class="form-label">Organization_name</label>
                       <input type="text" class="form-control" id="organization_name" name="organization_name" placeholder="Enter name">
                   </div>
            <div class="card mb-3">
                       <label for="organization_address" class="form-label">Address</label>
                       <input type="text" class="form-control" id="address" name="organization_address" placeholder="Enter address">
                   </div>

            <div class="card mb-3">
                       <label for="exampleInputEmail1" class="form-label">Email address</label>
                       <input name="organization_email" placeholder="Enter your email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                   </div>

                   <div class="card mb-3">
                       <label for="organization_mobile" class="form-label">Mobile</label>
                       <input placeholder="Enter your mobile number" type="text" class="form-control" id="organization_mobile" name="organization_mobile">
                   </div>

            <div class="card mb-3">
                       <label for="job_name" class="form-label">Job_name</label>
                       <input placeholder="Enter" type="text" class="form-control" id="job_name" name="job_name">

                   </div>

                   <div class="card">
                       <label for="position" class="form-label">Position</label>
                       <input placeholder="Enter position" type="text" class="form-control" id="position" name="position">
                   </div>

            <div class="card">
                   <label for="description" class="form-label">Description</label>
                   <input placeholder="Enter description" type="text" class="form-control" id="description" name="description">
               </div>

               <div class="card">
                   <label for="salary" class="form-label">Salary</label>
                   <input placeholder="Enter salary" type="decimal" class="form-control" id="salary" name="salary">
               </div>

            <div class="card">
                <label for="responsibilities" class="form-label">Responsibilities</label>
                <input placeholder="Enter responsibilities" type="text" class="form-control" id="responsibilities" name="responsibilities">
            </div>

            <div class="card">
                <label for="skill" class="form-label">Skill</label>
                <input placeholder="Enter skill" type="text" class="form-control" id="skill" name="skill">
            </div>

            <div class="card">
                <label for="education" class="form-label">Education</label>
                <input placeholder="Enter education" type="text" class="form-control" id="education" name="education">
            </div>

            <div class="card">
                <label for="image" class="form-label">Organization Logo</label>
                <input  type="file" class="form-control" id="image" name="image">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
</body>
@endsection
