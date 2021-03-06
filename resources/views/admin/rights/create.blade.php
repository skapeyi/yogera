@extends('layouts.app')

@section('content')
<div class="container">
  <div class="page-header">
    <h3>Celebrate a Person</h3>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          {!! Form::open(['action' => 'RightController@store']) !!}

          <div class="form-group">
            {!! Form::label('title','Title')!!}
            {!! Form::text('title', '', ['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('description','Details about the rights') !!}
            {!! Form::textarea('description', '',['class' => 'form-control','id' => 'reason']) !!}
          </div>

          <div class="form-group">
            {!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
          </div>

          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
<script
			  src="https://code.jquery.com/jquery-3.1.1.min.js"
			  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			  crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
<script>
    tinymce.init({
        selector : "textarea",
        plugins : ["advlist autolink lists link  charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime   contextmenu paste"],
        toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    });

</script>

@endsection
