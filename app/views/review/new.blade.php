@extends("layout")
@section("content")
<h3>
	เขียนรีวีวร้านอาหารใหม่
</h3>    
     
	{{ Form::open(array('url'=>'add_review'));}}
	{{ Form::text('review_title', null, array('class'=>'input-block-level', 'placeholder'=>'ชื่อรีวิว'))}} </p>
 	{{ Form::text('restaurant_name', null, array('class'=>'input-block-level', 'placeholder'=>'ชื่อร้านอาหาร'))}} </p>
    Category: {{ Form::select('category', $allCategories); }} </p>
              รับจอง{{ Form::radio('take_reservation', 'yes'); }}
             ไม่รับจอง{{ Form::radio('take_reservation', 'no'); }}</p>
    {{ Form::text('tel', null, array('class'=>'input-block-level', 'placeholder'=>'Tel')) }} </p>
    {{ Form::submit('Submit', array('class'=>'btn btn-large btn-primary btn-block'))}}
@stop