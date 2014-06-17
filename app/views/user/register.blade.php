@extends("layout")
@section("content")
{{ Form::open(array('url'=>'user/create', 'class'=>'form-signup')) }}
    <h2 class="form-signup-heading">Please Register</h2>
 
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    
 	{{ Form::text('username', null, array('class'=>'input-block-level', 'placeholder'=>'Username'))}} </p>
    {{ Form::text('firstname', null, array('class'=>'input-block-level', 'placeholder'=>'First Name')) }} </p>
    {{ Form::text('lastname', null, array('class'=>'input-block-level', 'placeholder'=>'Last Name')) }} </p>
    {{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }} </p>
    {{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }} </p>
    {{ Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'Confirm Password')) }} </p>
    {{ Form::text('tel', null, array('class'=>'input-block-level', 'placeholder'=>'Tel')) }} </p>
    {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}
@stop