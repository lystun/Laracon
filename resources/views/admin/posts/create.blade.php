@extends('layouts.admin')


@section('content')
    <h1>Create Post</h1>

    @include('includes.form_error')

    {!! Form::open(['method'=>'Post', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}
        {{csrf_field()}}
        <div class="form-group">
            {!! Form::Label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::Label('category_id', 'Category:') !!}
            {!! Form::select('category_id', array(1=>'Php', 0=>'Javascript'), null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::Label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::Label('body', 'Description:') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Post', ['class'=>'btn btn-primary'])!!}
        </div>

        {!! Form::close()!!}



@stop