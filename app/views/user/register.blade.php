@extends("layout")
@section("content")
{{ Form::open(array('url'=>'user/create', 'class'=>'form-signup')) }}
    <h2 class="form-signup-heading">Please Register</h2>
 
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    
 	Username {{ Form::text('username', null, array('class'=>'input-block-level', 'placeholder'=>'Username'))}} </p>
    {{ Form::text('firstname', null, array('class'=>'input-block-level', 'placeholder'=>'First Name')) }} </p>
    {{ Form::text('lastname', null, array('class'=>'input-block-level', 'placeholder'=>'Last Name')) }} </p>
    {{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }} </p>
    {{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }} </p>
    {{ Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'Confirm Password')) }} </p>
    {{ Form::select('age', array('10-20' => '10-20', '21-30' => '21-30', '31-40' => '31-40', '41-50' => '41-50', '51-60' => '51-60', '0' => 'ไม่ระบุ'), '1')}} </p>
    {{ Form::select('sex', array('male' => 'Male', 'female' => 'Female'), 'male')}} </p>
    {{ Form::select('salary', array('1' => 'ต่ำกว่า  15,000 บาท', '2' => '15,001 - 25,000', '3' => '25,001 - 35,000', '4' => '35,001 - 45,000', '5' => '45,001 - 55,000', '6' => '55,001 - 65,000', '7' => 'สูงกว่า  65,001 บาท'), 'male')}} </p>
    {{ Form::text('tel', null, array('class'=>'input-block-level', 'placeholder'=>'Tel')) }} </p>
    {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}
@stop