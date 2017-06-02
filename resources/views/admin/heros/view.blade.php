@extends('layouts.admin')

@section('content')
<div class="page-header">
  <h3>Updated Details</h3>
</div>

<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
      <div class="col-md-12">
        {!! Form::model($hero,['method' => 'put', 'route' => ['hero.manage',$hero]])!!}
        

          <div class="form-group">
            {!! Form::label('person','Person\'s Full Names')!!}
            {!! Form::text('person', $hero->name, ['class' => 'form-control','disabled' => 'disabled']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('sector','Area of work') !!}
            {!! Form::select('sector', ['public' => 'Public sector', 'private' => 'Private Sector',"other" => "Other"], $hero->sector,['class' => 'form-control','disabled' => 'disabled']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('organization','Person\'s Organization')!!}
            {!! Form::text('organization', $hero->organisation, ['class' => 'form-control','disabled' => 'disabled']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('region','Region') !!}
            {!! Form::select('region', ['central' => 'Central region', 'Western' => 'Western region','Eastern' => 'Eastern region','Northen' => 'Northen region'], $hero->region,['class' => 'form-control','disabled' => 'disabled']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('gender','Gender') !!}
            {!! Form::select('gender', ['male' => 'Male', 'female' => 'Female'], $hero->gender,['class' => 'form-control','disabled' => 'disabled']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('reason','Why are you celebrating this person?') !!}
            {!! Form::textarea('reason', $hero->reason,['class' => 'form-control','id' => 'reason','disabled' => 'disabled']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('approved','Approved?')!!}
            {!! Form::select('approved', [0 => 'No', 1 => 'Yes'], $hero->approved,['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('deleted','Delete Account?')!!}
            {!! Form::select('deleted', [0 => 'No', 1 => 'Yes'], $hero->deleted,['class' => 'form-control']) !!}
          </div>

          <div class="form-group">
          {!! Form::submit('Update',['class' => 'btn btn-primary']) !!}
          </div>

        {!! Form::close() !!}
      </div>      
    </div>    
  </div>  
</div>

@endsection

@push('scripts')
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
 
@endpush
