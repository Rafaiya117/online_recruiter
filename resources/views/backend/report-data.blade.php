@extends('backend.master_three')
@section('content')
    <div>
        <!-- Button trigger modal -->
        <button class="btn btn-primary" onclick="printDiv('printableArea')">
            <i class="bi bi-printer"></i> Print
        </button>
    </div>
    <div id="printableArea">
        <h1>Request List</h1>
        @if(session()->has('message'))
            <div class="row" style="padding: 10px;">
                <span class="alert alert-success">{{session()->get('message')}}</span>
            </div>
        @endif

        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>

            </tr>
            </thead>
            <tbody>
            @foreach($post__jobs as $key=>$data)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>
                        {{$data->organization_name}}
                    </td>
                    <td>{{$data->organization_address}}</td>
                    <td>{{$data->organization_email}}</td>
                    <td>{{$data->organization_mobile}}</td>
                </tr>
            @endforeach
            </tbody>

        </table>
        <h1>Applicants List</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Cv</th>
            </tr>
            </thead>
            <tbody>
            @foreach($applies as $apply)
                <tr>
                    <th >{{$apply->id}}</th>
                    <td scope="col">{{$apply->name}}</td>
                    <td scope="col">{{$apply->email}}</td>
                    <td scope="col">{{$apply->message}}</td>
                    <td scope="col">
                        <iframe src="{{url('/uploads/'.$apply->file)}}"></iframe>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <h1>User List</h1>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User Name</th>
                <th scope="col">Email</th>
                <th scope="col">Type</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user as $data)
                <tr>
                    <th scope="row">#</th>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->role}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


    <script type="text/javascript">
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>


@endsection

