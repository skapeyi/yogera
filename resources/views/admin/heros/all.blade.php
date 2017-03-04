@extends('layouts.admin')

@section('content')
<div class="page-header">
  <h3>Celebrated persons</h3>
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
      @foreach($heros as $hero)
        <tr>
          <td>{{$hero['person']}}</td>
          <td>{{$hero['organisation']}}</td>
          <td>{{$hero['gender']}}</td>
          <td>{{$hero['region']}}</td>
          <td>{!! $hero['reason'] !!}</td>
          <td></td>
          <td>{{ date('d/M/y',strtotime($hero["created_at"])) }}</td>
          <td>
            <p data-placement="top" data-toggle="tooltip" title="Approve">
                <button class="btn btn-danger btn-xs" data-title="Approve"><span
                            class="glyphicon glyphicon-check"></span> Approve
                </button>
            </p>
            <p data-placement="top" data-toggle="tooltip" title="Delete">
                <button class="btn btn-danger btn-xs" data-title="Delete"><span
                            class="glyphicon glyphicon-trash"></span> Delete
                </button>
            </p>

          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
