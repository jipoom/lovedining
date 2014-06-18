@extends("layout")
@section("content")
@foreach($Allrestaurants as $restaurant)
        <p>{{ $restaurant->name }}</p>
    @endforeach
@stop