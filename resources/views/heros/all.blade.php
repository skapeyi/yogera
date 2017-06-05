@extends('layouts.app')

@section('content')

@if(empty($heros))
<div class="container">
  <div class="page-header">
    <h3>Our Celeberated Heros</h3>
  </div>

  <div class="row">
    <div class="alert alert-info">
        <strong>Info!</strong> No Hero's reported yet!
  </div>
  </div>

  <div class="row">
      <div class="col-sm-8 col-sm-offset-2 text-center">
          <h1>Tell us about your hero.</h1>
          <p class="lead">Let us spread the work about heros and encourage more to do the same! </p>

          <div class="buttons" style="margin-bottom:10px;">
              <a href="/celebrate-a-person" class="btn btn-md btn-primary btn-lg">Celebrate A Person </i></a>
          </div>
      </div>
  </div>

</div>

@else
<div class="container">
  <div class="page-header">
    <h3>Our Celeberated Heros</h3>
  </div>

  <div class="row">
    @foreach ($heros as $hero)

      <div class="col-md-4">
          <div class="panel panel-info">
              <div class="panel-heading">
                  <h4>{{$hero['person']}} - {{$hero['organisation']}}</h4>
              </div>
              <div class="panel-body">
                {!! substr($hero['reason'],0, 150) !!}...
              </div>
              <div class="panel-footer" style="min-height: 50px;">
                  <div class="btn-group pull-right">
                      <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-comments"></i>  Comments</a>
                      <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View details</a>
                  </div>
              </div>
          </div>
      </div>

    @endforeach
  </div>

  <div class="row">
      <div class="col-sm-8 col-sm-offset-2 text-center">
          <h1>Tell us about your hero.</h1>
          <p class="lead">Know someone in a public office who is doing their best to serve their community? Appreciate them by celebrating them here! </p>

          <div class="buttons" style="margin-bottom:10px;">
              <a href="/celebrate-a-person" class="btn btn-md btn-primary btn-lg">Celebrate A Person </i></a>
          </div>
      </div>
  </div>

</div>

@endif

@endsection
