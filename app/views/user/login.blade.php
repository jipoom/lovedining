@extends("layout")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Login</h1>
            <hr>
                {{ Form::open(array('url'=>'user/login','class'=>'form-signin')) }}
                @if($errors->all())
                <div class='alert alert-danger'>
                    <h3>แจ้งเตือน</h3>
                    @foreach($errors->all() as $error)
                    {{ $error }}
                    @endforeach
                    {{ message }} 
                </div>
                @endif
                <div class="form-group col-lg-8">
                  <label for="exampleInputEmail1">Email</label>
                  {{ Form::text('email','',array(
                    'class'=>'form-control','placeholder'=>'Email')) }}
                </div>
                <div class="form-group col-lg-8">
                  <label for="exampleInputPassword1">Password</label>
                  {{ Form::password('password','',array(
                    'class'=>'form-control','placeholder'=>'Password')) }}
                </div>
                 
               <div class="form-actions col-lg-8">
                    <input type="submit" value="Login" class="btn btn-primary">
               </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop