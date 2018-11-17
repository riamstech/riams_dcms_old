    @extends('layouts.admin')
	@section('content')
	<h>Create Users</h>

    {!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id', 'Role:') !!}
        {!! Form::select('role_id', array(''=>'Choose Options')+$roles,null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('status', 'Status:') !!}
        {!! Form::select('status', array(1=> 'Active', 0=> 'Not Active'),0, ['class'=>'form-control'])!!}
    </div>

	<div class="form-group">
		 {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
	</div>

    {!! Form::close() !!}

	@stop