@extends("layout")
@section("content")
	@foreach($errors->all() as $error)
            <p><li>{{ $error }}</li></p>
    @endforeach
	@if($detail)
		<P>{{ $detail->review_title }}</P>
		<P>ชื่อร้าน: {{ $detail->restaurant_name }}</P>
		<P>รูปแบบ: {{ $detail->type }}</P>
		<P>จังหวัด: {{ $detail->province }}</P>
		<P>โทร: {{ $detail->tel }}</P>
		<P>{{ $detail->content }}</P>
	
		@if($comments)
			<p>Comments:</p>
			@foreach($comments as $comment)	
				<p>{{User::find($comment->user_id)->username}}:{{$comment->content}}</p>
				<p>score: {{$comment->rating}}</p>
				<p>{{$comment->date_added}}</p>
			@endforeach
			
		@endif
		<P>Write your comment:</P>
		@if(Auth::check())
           	{{ Form::open(array('url'=>'restaurants/add_comment')) }}
           	{{ Form::textarea('content') }}<p>
           	คะแนน
           	<br>
           	1{{ Form::radio('rating', '1'); }}
           	2{{ Form::radio('rating', '2'); }}
           	3{{ Form::radio('rating', '3'); }}
           	4{{ Form::radio('rating', '4'); }}
           	5{{ Form::radio('rating', '5'); }}
           	{{ Form::hidden('review_id', $detail->id) }}
			</br>
           	<p>{{ Form::submit('Submit', array('class'=>'btn btn-large btn-primary btn-block'))}}</p>
           	
        @else
        	{{HTML::link('/user/login', 'login to comment this review')}}        	 
        @endif
        
	@else
		Not found
	@endif
@stop