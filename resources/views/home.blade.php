@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>UET Routes Tracking system</h2>
        <hr style="{width: 300px;margin-left: auto;margin-right: auto;height: 1px;background-color:#666;opcaity: 0.5;}"></hr>


        <form action="insertbuttononclick">
            <button type="submit" class="btn btn-primary btn-lg btn">Insert Route</button>
        </form>
        <hr style="{width: 300px;margin-left: auto;margin-right: auto;height: 1px;background-color:#666;opcaity: 0.5;}"></hr>
        <h2>Data</h2>
        <hr style="{width: 300px;margin-left: auto;margin-right: auto;height: 1px;background-color:#666;opcaity: 0.5;}"></hr>

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
                        {{--                <button type="submit"  href="edit/{{$Student->id}}" style="padding: 4px" class="btn btn-info">Details</button>--}}
                        <a href="detail/{{$Student->id}}" style="padding: 4px" class="btn btn-info">Detail</a>
                        <a href="delete/{{$Student->id}}" style="padding: 4px" class="btn btn-danger ">Delete</a>
                        <a href="edit/{{$Student->id}}" style="padding: 4px" class="btn btn-info ">Edit</a>

                    </td>
                </tr>
            @endforeach
        </table>
</div>
@endsection
