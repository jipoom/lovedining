@extends("layout")
@section("content")

<meta charset="utf-8">
  <title>เขียนรีวิวใหม่</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 100,
      step: 100,
      max: 10000,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val(ui.values[ 0 ] + " บาท - " + ui.values[ 1 ] + " บาท");
      }
    });
    $( "#amount" ).val($( "#slider-range" ).slider( "values", 0 ) +
      " บาท - " + $( "#slider-range" ).slider( "values", 1 ) + " บาท");
  });
  
  $(function() {
    $( "#time-range" ).slider({
      range: true,
      min: 100,
      step: 100,
      max: 10000,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val(ui.values[ 0 ] + " บาท - " + ui.values[ 1 ] + " บาท");
      }
    });
    $( "#amount" ).val($( "#slider-range" ).slider( "values", 0 ) +
      " บาท - " + $( "#slider-range" ).slider( "values", 1 ) + " บาท");
  });

</script>
<h3>
	ข้อมูลร้านอาหาร
</h3>    
     
	{{ Form::open(array('url'=>'add_review'));}}
	{{ Form::text('review_title', null, array('class'=>'input-block-level', 'placeholder'=>'ชื่อรีวิว'))}} </p>
 	{{ Form::text('restaurant_name', null, array('class'=>'input-block-level', 'placeholder'=>'ชื่อร้านอาหาร'))}} </p>
              ประเภท: {{ Form::select('category', $allCategories); }} </p>
              รับจองโต๊ะ{{ Form::radio('take_reservation', '1'); }}
             ไม่รับจองโต๊ะ{{ Form::radio('take_reservation', '0'); }}</p>
                          
              มีบริการ Delivery{{ Form::radio('delivery', 'yes'); }}
             ไม่มีบริการ Delivery{{ Form::radio('delivery', 'no'); }}</p>
             
             มี  WiFi{{ Form::radio('wifi', '1'); }}
             ไม่มี  WiFi{{ Form::radio('wifi', '0'); }}</p>  
             
             มี  TV{{ Form::radio('tv', '1'); }}
             ไม่มี  TV{{ Form::radio('tv', '0'); }}</p>
             
              มี  Alcohol{{ Form::radio('alcohol', '1'); }}
             ไม่มี  Alcohol{{ Form::radio('alcohol', '0'); }}</p>  
                      
    {{ Form::text('menu', null, array('size' => '50','placeholder'=>'Link to Menu')) }} </p>
    
    {{ Form::text('url', null, array('size' => '50','placeholder'=>'Restaurant Website')) }} </p>
    
              ที่อยู่: </p>
    {{ Form::text('street_addr', null, array('placeholder'=>'เลขที่')) }} 
    {{ Form::text('subdistrict', null, array('placeholder'=>'แขวง')) }} </p>  
    {{ Form::text('distrcit', null, array('placeholder'=>'เขต')) }}  
    {{ Form::text('province', null, array('placeholder'=>'จังหวัด')) }} </p>       
    
             
	<p>
 	<label for="amount">Price range:</label>
  	<input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
	</p>
 
	<div id="slider-range"></div>
	จันทร์: เปิดเวลา <input type="time" name="usr_time"> ปิดเวลา <input type="time" name="usr_time"></p>
              อังคาร: เปิดเวลา <input type="time" name="usr_time"> ปิดเวลา <input type="time" name="usr_time">
              อังคาร: เปิดเวลา <input type="time" name="usr_time"> ปิดเวลา <input type="time" name="usr_time">
              อังคาร: เปิดเวลา <input type="time" name="usr_time"> ปิดเวลา <input type="time" name="usr_time">
              อังคาร: เปิดเวลา <input type="time" name="usr_time"> ปิดเวลา <input type="time" name="usr_time">
              อังคาร: เปิดเวลา <input type="time" name="usr_time"> ปิดเวลา <input type="time" name="usr_time">
              อังคาร: เปิดเวลา <input type="time" name="usr_time"> ปิดเวลา <input type="time" name="usr_time">
          
    {{ Form::submit('Submit', array('class'=>'btn btn-large btn-primary btn-block'))}}
@stop