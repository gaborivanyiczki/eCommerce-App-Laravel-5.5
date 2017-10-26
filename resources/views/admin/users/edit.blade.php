@extends('layouts.admin')





@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Users</h1>
            </div>
            <!-- /.col-lg-12 -->

                <div class="col-sm-3">
                    <img src="{{$user->photo ? $user->photo->image : '/images/400x400.png'}}" alt="" class="img-responsive img-rounded">
                </div>

                <div class="col-sm-9">
                    {!! Form::model($user, ['method'=>'PATCH','action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}
                    {{csrf_field()}}

                    <div class="form-group">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::email('email', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', 'Password:') !!}
                        {!! Form::password('password', ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('role_id', 'Role:') !!}
                        {!! Form::select('role_id', $roles , null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('is_active', 'Status:') !!}
                        {!! Form::select('is_active', array(1=>'Active', 0=>'Not active') ,null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('image', 'Profile Picture:') !!}
                        {!! Form::file('image', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}

                </div>
            <div class="row">@include('includes.error-message')</div>
        </div>

    </div>

@endsection