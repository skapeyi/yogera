@extends('layouts.admin')

@section('content')
  <div class="page-header">
    <h3>Public opinions</h3>
  </div>
  <div class="panel pane-primary">
    <div class="panel-heading clearfix">
        <div class="btn-group pull-right">
            <a href="/articles/create" class="btn btn-primary btn-sm">
              New Opinion
            </a>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped" id="users-table">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Content</th>
                <th>Created</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
            @php
            $i = 1
            @endphp

            @foreach($opinions as $opinion)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$opinion["title"]}}</td>
                    <td>{!! $opinion["content"] !!}</td>
                    <td>{{date('d/M/y',strtotime($opinion["created_at"]))}}</td>
                    <td>
                        <p data-placement="top" data-toggle="tooltip" title="Delete">
                            <button class="btn btn-danger btn-xs" data-title="Delete"><span
                                        class="glyphicon glyphicon-trash"></span> Delete
                            </button>
                        </p>
                    </td>
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