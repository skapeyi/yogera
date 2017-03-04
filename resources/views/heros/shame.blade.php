@extends('layouts.app')

@section('content')
<div class="container">
  <div class="page-header">
    <h3>Shame a Person/ Corrupt officer</h3>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          {!! Form::open(['action' => 'HeroController@store']) !!}
          <div class="form-group">
            {!! Form::hidden('type', 'shame', ['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('person','Person\'s Full Names')!!}
            {!! Form::text('person', '', ['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('sector','Area of work') !!}
            {!! Form::select('sector', ['public' => 'Public sector', 'private' => 'Private Sector'], null,['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('organization','Person\'s Organization')!!}
            {!! Form::text('organization', '', ['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('region','Region') !!}
            {!! Form::select('region', ['central' => 'Central region', 'Western' => 'Western region','Eastern' => 'Eastern region','Northen' => 'Northen region'], null,['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('gender','Gender') !!}
            {!! Form::select('gender', ['male' => 'Male', 'female' => 'Female'], null,['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('reason','Why are you celebrating this person?') !!}
            {!! Form::textarea('reason', '',['class' => 'form-control','id' => 'reason']) !!}
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
