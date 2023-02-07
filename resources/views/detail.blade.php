
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

<script> // returns ["Paul", "Steve", "Panakkal"]</script>
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">

                <div class="card card-style1 border-0">

                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">

                        <div class="row align-items-center">
                      <a href="http://localhost:8000/track_bus_live"   >   <p  href="http://localhost:8000/track_bus_live" style="margin-left: 900px" > Track Bus Live  </p> </a>
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="{{asset('uploads/'.$data->image)}}" alt="Not valid format"
                                     size="500 × 720 px">
                                {{--                                                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="...">--}}
                            </div>
                            <div class="col-lg-6 px-xl-10">
                                <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                    <h3 class="h2 text-white mb-0">Bus No {{$data->route_no }}</h3>
                                    <span class="text-primary">UET</span>
                                </div>
                                <ul class="list-unstyled mb-1-9">
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Route no:</span>{{$data->route_no }}
                                    </li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Bus No</span> {{$data->bus_no }}
                                    </li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Driver Name:</span>{{$data->driver_name }}
                                    </li>

                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Destination:</span>{{$data->destination }}
                                    </li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Driver number:</span>{{$data->driver_contact }}
                                    </li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Bus Stops:</span>{{$data->bus_stops }}
                                    </li>


                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    body {
        margin-top: 20px;
    }

    .card-style1 {
        box-shadow: 0px 0px 10px 0px rgb(89 75 128 / 9%);
    }

    .border-0 {
        border: 0 !important;
    }


    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: 0.25rem;
    }

    section {
        padding: 120px 0;
        overflow: hidden;
        background: #fff;
    }

    .mb-2-3, .my-2-3 {
        margin-bottom: 2.3rem;
    }

    .section-title {
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 10px;
        position: relative;
        display: inline-block;
    }

    .text-primary {
        color: #ceaa4d !important;
    }

    .text-secondary {
        color: #15395A !important;
    }

    .font-weight-600 {
        font-weight: 600;
    }

    .display-26 {
        font-size: 1.3rem;
    }

    @media screen and (min-width: 992px) {
        .p-lg-7 {
            padding: 4rem;
        }
    }

    @media screen and (min-width: 768px) {
        .p-md-6 {
            padding: 3.5rem;
        }
    }

    @media screen and (min-width: 576px) {
        .p-sm-2-3 {
            padding: 2.3rem;
        }
    }

    .p-1-9 {
        padding: 1.9rem;
    }

    .bg-secondary {
        background: #15395A !important;
    }

    @media screen and (min-width: 576px) {
        .pe-sm-6, .px-sm-6 {
            padding-right: 3.5rem;
        }
    }

    @media screen and (min-width: 576px) {
        .ps-sm-6, .px-sm-6 {
            padding-left: 3.5rem;
        }
    }

    .pe-1-9, .px-1-9 {
        padding-right: 1.9rem;
    }

    .ps-1-9, .px-1-9 {
        padding-left: 1.9rem;
    }

    .pb-1-9, .py-1-9 {
        padding-bottom: 1.9rem;
    }

    .pt-1-9, .py-1-9 {
        padding-top: 1.9rem;
    }

    .mb-1-9, .my-1-9 {
        margin-bottom: 1.9rem;
    }

    @media (min-width: 992px) {
        .d-lg-inline-block {
            display: inline-block !important;
        }
    }

    .rounded {
        border-radius: 0.25rem !important;
    }
</style>
<div id="pop" style="margin-left: 180px">
{!! html_entity_decode($data->route_map) !!}

</div>





<html>
<head>
    <title>Simple Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="module" src="./index.js"></script>
</head>
<style>
    /*
 * Always set the map height explicitly to define the size of the div element
 * that contains the map.
 */
    #map {
        height: 100%;
        width: 80%;
    }

    /*
     * Optional: Makes the sample page fill the window.
     */
    html,
    body {
        height: 500px;
        margin-left: 100px;

    }
</style>
<script>

    let map;

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: -34.397, lng: 150.644 },
            zoom: 8,
        });
    }

    window.initMap = initMap;
</script>

<body>
<div id="map"></div>

<!--
 The `defer` attribute causes the callback to execute after the full HTML
 document has been parsed. For non-blocking uses, avoiding race conditions,
 and consistent behavior across browsers, consider loading using Promises
 with https://www.npmjs.com/package/@googlemaps/js-api-loader.
-->
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSNW7Pt4PQZ7qxeT6rrTAQoBqpcw51KBE&callback=initMap&v=weekly"
    defer
></script>
</body>
</html>


