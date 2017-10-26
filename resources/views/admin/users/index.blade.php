@extends('layouts.admin')



@section('content')

    @if(Session::has('deleted_user'))

        <p class="bg-danger">{{session('deleted_user')}}</p>

    @endif

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Users</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Admins</h3>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>FName</th>
                                    <th>LName</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Adress</th>
                                    <th>City</th>
                                    <th>Role</th>
                                    <th>Active</th>
                                    <th>Registered</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($users)
                                    @foreach($users as $user)
                                        @if($user->role_id==1)
                                        <tr class="odd gradeX">
                                            <td>{{$user->fname}}</td>
                                            <td>{{$user->lname}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->telephone}}</td>
                                            <td>{{$user->adress}}</td>
                                            <td>{{$user->city}}</td>
                                            <td>{{$user->role->name}}</td>
                                            <td>{{$user->is_active == 1 ? 'Active' : 'Inactive'}}</td>
                                            <td>{{$user->created_at->diffForHumans()}}</td>
                                            <td><a href="{{route('users.edit', $user->id)}}" class="btn btn-primary btn-xs" role="button"><span class="glyphicon glyphicon-pencil"></span> Edit</a></td>
                                            <td>{!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id]]) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                        @endif
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                        </div>


                    </div>
                    <!-- /#page-wrapper -->
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Users</h3>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>FName</th>
                                    <th>LName</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Adress</th>
                                    <th>City</th>
                                    <th>Role</th>
                                    <th>Active</th>
                                    <th>Registered</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($users)
                                    @foreach($users as $user)
                                <tr class="odd gradeX">
                                    <td>{{$user->fname}}</td>
                                    <td>{{$user->lname}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->telephone}}</td>
                                    <td>{{$user->adress}}</td>
                                    <td>{{$user->city}}</td>
                                    <td>{{$user->role->name}}</td>
                                    <td>{{$user->is_active == 1 ? 'Active' : 'Inactive'}}</td>
                                    <td>{{$user->created_at->diffForHumans()}}</td>
                                    <td><a href="{{route('users.edit', $user->id)}}" class="btn btn-primary btn-xs" role="button"><span class="glyphicon glyphicon-pencil"></span> Edit</a></td>
                                    <td>{!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id]]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                     @endforeach
                                    @endif

                                </tbody>
                            </table>
                        </div>


                    </div>
                    <!-- /#page-wrapper -->
                </div>
            </div>
        </div>
    </div>

@endsection