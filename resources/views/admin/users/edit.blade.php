@extends('layouts.admin')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Manage {{$user->name}}'s account</h4>            
        </div>

        <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                {!! Form::model($user,['method' => 'PUT', 'route' => ['user.manage',$user]])!!}

                <div class="form-group">
                  {!! Form::label('name','Name') !!}
                  {!! Form::text('name', $user->name, ['class' => 'form-control','disabled' => 'disabled']) !!}
                </div>

                <div class="form-group">

                  {!! Form::label('email','email') !!}
                  {!! Form::text('email', $user->email, ['class' => 'form-control','disabled' => 'disabled']) !!}
                </div>

                <div class="form-group">
                  {!! Form::label('approved','Approved?')!!}
                  {!! Form::select('approved', [0 => 'No', 1 => 'Yes'], $user->approved,['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('deleted','Delete Account?')!!}
                  {!! Form::select('deleted', [0 => 'No', 1 => 'Yes'], $user->deleted,['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                  {!! Form::submit('Update',['class' => 'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}                
              </div>
                
            </div>
        </div>
    </div>
@endsection


