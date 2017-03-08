@extends('layouts.articles')

@section('content')
  <div class="page-header">
    <h2>Know your rights</h3>
    @if(empty($rights))
      <div class="alert alert-info">
          <strong>Info!</strong> No content at the moment!
      </div>
    @else
      @foreach($rights as $right)
        <div class="panel">
          <div class="panel-body">
            <h3>{{$right['title']}}</h3>
            {!! $right['content']!!}
          </div>
        </div>
      @endforeach
    @endif
  </div>
@endsection
