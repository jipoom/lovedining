@extends("layout")
@section("content")

<meta charset="utf-8">
  <title>เขียนรีวิวใหม่</title>
<h3>
	ข้อมูลร้านอาหาร
</h3>    
     
	{{ Form::open(array('url'=>'add_review'));}}
	{{ Form::text('review_title', null, array('class'=>'input-block-level', 'placeholder'=>'ชื่อรีวิว'))}} </p>
 	{{ Form::text('restaurant_name', null, array('class'=>'input-block-level', 'placeholder'=>'ชื่อร้านอาหาร'))}} </p>
              ประเภท: {{ Form::select('category', $allCategories); }} </p>           
                      
    {{ Form::text('menu', null, array('size' => '50','placeholder'=>'Link to Menu')) }} </p>
    
    {{ Form::text('url', null, array('size' => '50','placeholder'=>'Restaurant Website')) }} </p>
    
              ที่อยู่: </p>
    {{ Form::text('street_addr', null, array('placeholder'=>'เลขที่')) }} 
    {{ Form::text('subdistrict', null, array('placeholder'=>'แขวง')) }} </p>  
    {{ Form::text('distrcit', null, array('placeholder'=>'เขต')) }}  
    {{ Form::text('province', null, array('placeholder'=>'จังหวัด')) }} </p>       
          
<h3>
	เขียนรีวิวที้นี่....
</h3>    
    {{ Form::textarea('content')}} </p> 
    {{ Form::submit('Submit', array('class'=>'btn btn-large btn-primary btn-block'))}}
@stop