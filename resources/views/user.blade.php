

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>


<div class="container">
    <h2>UET Routes Tracking system</h2>
    <hr style="{width: 300px;margin-left: auto;margin-right: auto;height: 100px;background-color:#666;opcaity: 0.5;}"></hr>




    <hr style="{width: 300px;margin-left: auto;margin-right: auto;height: 100px;background-color:#666;opcaity: 0.5;}"></hr>
    <h2>Data</h2>
    <hr style="{width: 300px;margin-left: auto;margin-right: auto;height: 100px;background-color:#666;opcaity: 0.5;}"></hr>

    <table class="table table-hover">
        <thead>
        <tr>
            <td><strong>Index</strong></td>
            <td><strong>Route No</strong></td>
            <td><strong>Driver Name</strong></td>
            <td><strong>Destination</strong></td>
            <td><strong>Action</strong></td>
        </tr>
        </thead>

        @foreach($Students as $Student)
            <tr>
                <td>
                    {{$index+=1}}
                </td>
                <td>{{$Student->route_no}}</td>
                <td>{{$Student->driver_name}}</td>
                <td>{{$Student->destination}}</td>
                {{--                <td>--}}
                {{--                    <img src="{{asset('uploads/'.$Student->image)}}" alt="Not valid format" size="511 × 720 px"></td>--}}
                <td>
                    <a href="detail/{{$Student->id}}" style="padding: 4px" class="btn btn-info">Detail</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
