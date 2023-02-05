
@foreach ($location as $object)

<iframe src="https://www.google.com/maps?q= {{$object->latitude}},{{$object->longitude}}&hl=es;z=14&output=embed" style="width: 500px; hieght: 700px"></iframe>
Latitude:    {{ $object->latitude }}
Longitude    {{ $object->longitude }}

@endforeach

