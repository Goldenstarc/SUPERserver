@extends('layouts.admin')



@section('content')


    <h1> Edit ProductSpecifications</h1>


    <div class="col-sm-6">
            <div class="row">
            <h1> Specifications</h1>
            {!! Form::model($specification , ['method'=>'PATCH', 'action'=> ['AdminProductSpecificationController@update',$specification->id ]]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name' , null ,['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                {!! Form::label('type', 'Type:') !!}
                {!! Form::select('type' , ['select Type'] + $types , null ,['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::submit('update Category', ['class'=>'btn btn-primary col-sm-6'])!!}
            </div>
            {!! Form::close() !!}




            {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminProductSpecificationController@destroy',$specification->id]]) !!}
            <div class="form-group">
                {!! Form::submit('Delete Category', ['class'=>'btn btn-danger col-sm-6'])!!}
            </div>
            {!! Form::close() !!}
            </div>
        <div class="row">
            @include('includes.form_errors')
        </div>


    </div>


    {{--<div class="col-sm-6">--}}

    {{--</div>--}}





@stop