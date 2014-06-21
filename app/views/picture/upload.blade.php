{{ Form::open(['url' => 'upload', 'files' => true, 'method' => 'post']) }}
<div class="form-group">
     <label class="col-sm-3 control-label">Upload image</label>
     <div class="col-sm-6">
         {{ Form::file('image') }}
         {{ Form::submit('Upload')}}
     </div>
</div>
{{ Form::close() }}