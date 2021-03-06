@extends('layouts.articles')

@section('content')
  <div class="page-header">
    <h2>From the blog</h3>
    @if(empty($blogs))
      <div class="alert alert-info">
          <strong>Info!</strong> No content at the moment!
      </div>
    @else
      @foreach($blogs as $blog)
        <div class="panel">
          <div class="panel-body">
            <h3>{{$blog['title']}}</h3>
            {!! $blog['content']!!}
          </div>
        </div>
      @endforeach
    @endif
  </div>
@endsection
