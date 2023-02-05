<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
            crossorigin="anonymous"></script>


</head>
<body style="background: lightgray">

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" id="id" name="id" value="{{$data->id}}" >
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Name</label>
                            <input type="text" value="{{$data->name }}" class="form-control " name="name" required>
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label class="font-weight-bold">First Name</label>--}}
{{--                            <input type="text" value="{{$data->first_name }}" class="form-control " name="first_name" required>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label class="font-weight-bold">Last Name</label>--}}
{{--                            <input type="text" class="form-control " name="last_name" value="{{$data->last_name}}">--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label class="font-weight-bold">Email</label>
                            <input type="email" class="form-control " name="email" value="{{$data->email}}">

                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Age</label>
                            <input type="number" class="form-control " name="age" value="{{$data->age}}">

                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">CNIC</label>

                            <input type="number" name="cnic"
                                   class="form-control " name="cnic" placeholder="323XX-XXXXXXX-X" value="{{$data->cnic}}">

                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Phone number</label>
                            <input type="number" class="form-control " name="phone_number" placeholder="+92 XXXXXXXXXX" value="{{$data->phone_number}}">

                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Class</label>
                            <input type="Number" class="form-control " name="class" value="{{$data->class}}">

                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Section</label>
                            <input type="text" class="form-control " name="section" value="{{$data->section}}">

                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Hieght</label>
                            <input type="number" class="form-control " name="hieght" placeholder="Hieght in cm " value="{{$data->hieght}}">

                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Wieght</label>
                            <input type="number" class="form-control " name="wieght" placeholder="Wieght in Kg" value="{{$data->wieght}}">

                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Country</label>
                            <div class="form-group">
                                <select class="form-group" name="country" aria-label="Default select example">
                                    <option selected>{{$data->country}}</option>
                                    <option>Pakistan</option>
                                    <option>Saudia-Arabia</option>
                                    <option>China</option>
                                </select>
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">City</label>
                            <input type="text" class="form-control " value="{{$data->city}}" name="city">

                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Zip code</label>
                            <input type="text" class="form-control " name="zip_code" value="{{$data->zip_code}}" placeholder="PAK-xxxx(Format)">

                        </div>

                        <button style="margin-left: 900px" type="submit" class="btn btn-md btn-primary">Update</button>

                        <button type="reset" style="margin-right: 0px ; background: #11c2fa   "
                                class="btn btn-md btn-warning">Close
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>
</body>
</html>
