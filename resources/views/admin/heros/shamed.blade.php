@extends('layouts.admin')

@section('content')
<div class="page-header">
  <h3>Shamed persons</h3>
</div>

<div class="panel panel-primary">
  <table class="table table-striped table-responsive">
    <thead>
      <tr>
        <th>Name</th>
        <th>Organization</th>
        <th>Gender</th>
        <th>Region</th>
        <th>Reason</th>
        <th>Approved</th>
        <th>Created</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($shamed as $shame)
        <tr>
          <td>{{$shame['person']}}</td>
          <td>{{$shame['organisation']}}</td>
          <td>{{$shame['gender']}}</td>
          <td>{{$shame['region']}}</td>
          <td>{!! $shame['reason'] !!}</td>
          <td></td>
          <td>{{ date('d/M/y',strtotime($shame["created_at"])) }}</td>
          <td></td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
