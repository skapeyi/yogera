@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="page-header">
      <h3>Add new article</h3>
    </div>

    <div class="row">
      <div class="col-md-10 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-body">
            {!! Form::open(['action' => 'ArticleController@store']) !!}

            <div class="form-group">
              {!! Form::label('title','Title')!!}
              {!! Form::text('title', '', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('category','Article Category') !!}
              {!! Form::select('category', ['parliament_discussions' => 'Parliamentary Discussions', 'human_rights' => 'Human Rights','blogs' => 'General Blog','public_opinion' => 'Public Opinion','campaigns' => 'Campaigns'], null,['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('content','Article Content') !!}
              {!! Form::textarea('content', '',['class' => 'form-control','id' => 'reason']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('external_url','Article external page(optional)')!!}
              {!! Form::text('external_url', '', ['class' => 'form-control']) !!}
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
