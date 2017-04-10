@extends('layouts.admin')

@section('content')
  <div class="page-header">
    <h3>Situations</h3>
  </div>
  <div class="panel pane-primary">
    <div class="panel-heading clearfix">
        <div class="btn-group pull-right">
            <a href="/situation" class="btn btn-primary btn-sm">
              New Situation
            </a>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped" id="users-table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Reason</th>
                <th>Category</th>
                <th>Report To</th>
                <th>Status</th>
                          </tr>
            </thead>
            <tbody>
            @php
            $i = 1
            @endphp

            @foreach($situations as $item)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$item["name"]}}</td>
                    <td>{!! $item["reason"] !!}</td>
                    <td>{!! $item["category"] !!}</td>
                    <td>{{date('d/M/y',strtotime($item["created_at"]))}}</td>
                    <td>{{ $item['status']}}</td>
                </tr>
                @php
                $i++;
                @endphp
            @endforeach
            </tbody>
        </table>
    </div>

  </div>

@endsection
