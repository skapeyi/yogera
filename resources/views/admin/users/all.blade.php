@extends('layouts.admin')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Users</h4>
            <div class="btn-group pull-right">
                <button
                        type="button"
                        class="btn btn-success btn-sm"
                        data-toggle="modal"
                        data-target="#userModal">
                    <i class="glyphicon glyphicon-plus"></i> Add User
                </button>
            </div>
        </div>

        <div class="panel-body">
            <table class="table table-striped" id="users-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Joined</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @php
                $i = 1
                @endphp

                @foreach($users as $user)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$user["name"]}}</td>
                        <td>{{$user["email"]}}</td>
                        <td>{{date('d/M/y',strtotime($user["created_at"]))}}</td>
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
