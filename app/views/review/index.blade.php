@extends("layout")
@section("content")
@foreach($allReviews as $review)
        <p><li>{{ $review->review_title}} {{ $review->restaurant_name}} {{$review->province}}</li></p>
    @endforeach
@stop