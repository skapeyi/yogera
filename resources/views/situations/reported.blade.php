
@extends('layouts.app')

@section('content')

@if(empty($situations))
<div class="container">
  <div class="page-header">
    <h3>Reported Situations</h3>
  </div>

  <div class="row">
    <div class="alert alert-info">
        <strong>Info! </strong> No situation reported yet!
  </div>
  </div>

   <div class="row">
      <div class="col-sm-8 col-sm-offset-2 text-center">
          <h1>Report a situation.</h1>
          <p class="lead">Your voice help improve public service delivery in Uganda. Seen something that is not right in your community hospital, school, public office, community and the neighborhood? do not be quiet speak out. We will ensure that the right people get to know the situation and work upon it for improved communities through better public service delivery. Let our leaders know what is happening and together our voice can influence the desired change. Do not be quiet. If you see it, know it, REPORT IT.</p>

          <div class="buttons" style="margin-bottom:10px;">
              <a href="/situation" class="btn btn-md btn-primary btn-lg">Report A Situation </i></a>
          </div>
      </div>
  </div>

</div>

@else
<div class="container">
  <div class="page-header">
    <h3>Reported situations</h3>
  </div>

  <div class="row">
    @foreach ($situations as $situation)

      <div class="col-md-4">
          <div class="panel panel-info">
              <div class="panel-heading">
                  <h4>{{$situation['name']}} - {{$situation['category']}}</h4>
              </div>
              <div class="panel-body">
                {!! substr($situation['reason'],0, 500) !!} [.........]
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
          <h1>Report a situation.</h1>
          <p class="lead">Your voice help improve public service delivery in Uganda. Seen something that is not right in your community hospital, school, public office, community and the neighborhood? do not be quiet speak out. We will ensure that the right people get to know the situation and work upon it for improved communities through better public service delivery. Let our leaders know what is happening and together our voice can influence the desired change. Do not be quiet. If you see it, know it, REPORT IT.</p>

          <div class="buttons" style="margin-bottom:10px;">
              <a href="/situation" class="btn btn-md btn-primary btn-lg">Report A Situation </i></a>
          </div>
      </div>
  </div>

</div>

@endif

@endsection

