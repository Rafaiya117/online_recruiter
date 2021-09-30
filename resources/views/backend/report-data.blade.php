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

