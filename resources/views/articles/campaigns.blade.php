@extends('layouts.articles')

@section('content')
  <div class="page-header">
    <h2>Our Campaigns</h3>
    @if(empty($campaigns))
      <div class="alert alert-info">
          <strong>Info!</strong> No Campaigns runninga at the moment!
      </div>
    @else
      @foreach($campaigns as $campaign)
        <div class="panel">
          <div class="panel-body">
            <h3>{{$campaign['title']}}</h3>
            {!! $campaign['content']!!}
          </div>
        </div>
      @endforeach
    @endif
  </div>
@endsection
