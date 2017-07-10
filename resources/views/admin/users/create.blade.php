@extends('layouts.admin')



@section('content')
    <h1>users Users</h1>
    {!! Form::open(['method'=>'POST', 'action'=> 'AdminUserController@store']) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title' , null ,['class'=>'form-control'])!!}
    </div>
    <div>
        {!! Form::submit('create Post', ['class'=>'btn btn-primary'])!!}
    </div>
    {!! Form::close() !!}
@stop