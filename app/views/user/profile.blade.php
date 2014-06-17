@extends("layout")
@section("content")
Welcome {{Auth::user()->firstname}} , You are now logged in!!
@stop