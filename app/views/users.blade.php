@extends('layout')

@section('content')
    @foreach($users_view as $user)
        <p>{{ $user->name }}</p>
    @endforeach
@stop