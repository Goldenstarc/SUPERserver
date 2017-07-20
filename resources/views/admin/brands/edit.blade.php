@extends('layouts.admin')



@section('content')


    <h1>Brands</h1>


    <div class="col-sm-6">
        <h1>Brand</h1>
        {!! Form::model($brand , ['method'=>'PATCH', 'action'=> ['AdminBrandsController@update',$brand->id], 'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name' , null ,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('url', 'Website:') !!}
            {!! Form::text('url' , null ,['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id' , null,['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
            {!! Form::submit('update brand', ['class'=>'btn btn-primary col-sm-6'])!!}
        </div>
        {!! Form::close() !!}



        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminBrandsController@destroy',$brand->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete Brand', ['class'=>'btn btn-danger col-sm-6'])!!}
        </div>
        {!! Form::close() !!}


    </div>

    <div class="col-sm-6">

    </div>






@stop