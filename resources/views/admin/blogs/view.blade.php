@extends('layouts.admin')

@section('content')
  <div class="container">
    <div class="page-header">
      <h3>Update</h3>
    </div>

    <div class="row">
      <div class="col-md-10">
        <div class="panel panel-default">
          <div class="panel-body">
            {!! Form::model($article,['method' => 'PUT', 'route' => ['article.manage',$article]])!!}

            <div class="form-group">
              {!! Form::label('title','Title')!!}
              {!! Form::text('title', $article->title, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('category','Article Category') !!}
              {!! Form::select('category', ['parliament_discussions' => 'Parliamentary Discussions', 'human_rights' => 'Human Rights','blogs' => 'General Blog','public_opinion' => 'Public Opinion','campaigns' => 'Campaigns'], $article->category,['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('content','Article Content') !!}
              {!! Form::textarea('content', $article->content,['class' => 'form-control','id' => 'reason']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('approved','Approved?')!!}
              {!! Form::select('approved', [0 => 'No', 1 => 'Yes'], $article->approved,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('deleted','Delete Item?')!!}
              {!! Form::select('deleted', [0 => 'No', 1 => 'Yes'], $article->deleted,['class' => 'form-control']) !!}
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
