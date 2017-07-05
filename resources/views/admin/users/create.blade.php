@extends ('layouts.admin')


@section ('content')

    <h1>Create Users</h1>

        {!! Form::open(['method'=>'Post', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}
            {{csrf_field()}}
        <div class="form-group">
            {!! Form::Label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::Label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::Label('file', 'Upload File:') !!}
            {!! Form::file('file', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::Label('password', 'Password:') !!}
            {!! Form::password('password', ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::Label('role_id', 'Role:') !!}
            {!! Form::select('role_id', [''=>'Choose Options']+$roles, null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::Label('is_active', 'Status:') !!}
            {!! Form::select('is_active',array(1=>'Active',0 =>'Not Active') ,0, ['class'=>'form-control'])!!}
        </div>



        <div class="form-group">
            {!! Form::submit('Create User', ['class'=>'btn btn-primary'])!!}
        </div>

        {!! Form::close()!!}

    @include('includes.form_error')

@stop