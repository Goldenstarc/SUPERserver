@extends('layouts.admin')



@section('content')
    <h1>Create Post</h1>

    <div class="row">
        {!! Form::open(['method'=>'POST', 'action'=> 'AdminProductsController@store' , 'files'=>true]) !!}
        <div class="form-group col-sm-3">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name' , null ,['class'=>'form-control'])!!}
        </div>




        <div class="form-group col-sm-3">
            {!! Form::label('category_id', 'Category') !!}
            {!! Form::select('category_id' , [''=>'chose categories'] + $categories , null ,['class'=>'form-control'])!!}
        </div>


        <div class="form-group col-sm-3">
            {!! Form::label('brand_id', 'Brand') !!}
            {!! Form::select('brand_id' , [''=>'chose categories'] + $brands , null ,['class'=>'form-control'])!!}
        </div>

        <div class="form-group col-sm-3">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id' , null,['class'=>'form-control'])!!}
        </div>



        <div class="form-group col-sm-12">
            <div class="form-group col-sm-3">
                {!! Form::label('code', 'Code:') !!}
                {!! Form::text('code' , null ,['class'=>'form-control'])!!}
            </div>

            <div class="form-group col-sm-3">
                {!! Form::label('price', 'Price:') !!}
                {!! Form::text('price' , null ,['class'=>'form-control'])!!}
            </div>
            <div class="form-group col-sm-3">
                {!! Form::label('min_price', 'Min Price:') !!}
                {!! Form::text('min_price' , null ,['class'=>'form-control'])!!}
            </div>
            <div class="form-group col-sm-3">
                {!! Form::label('off', 'Off:') !!}
                {!! Form::text('off' , null ,['class'=>'form-control'])!!}
            </div>
        </div>

        <div class="form-group col-sm-12">
            {!! Form::label('short_description', 'Short Description') !!}
            {!! Form::textarea('short_description' , null ,['class'=>'form-control', 'rows'=>3])!!}
        </div>

        <div class="form-group col-sm-12">
            {!! Form::label('long_description', 'Long Description:') !!}
            {!! Form::textarea('long_description' , null ,['class'=>'form-control', 'rows'=>3])!!}
        </div>





        <div class="form-group col-sm-6">
            {!! Form::submit('create Post', ['class'=>'btn btn-primary'])!!}
        </div>
        {!! Form::close() !!}

    </div>

    <div class="row">
        @include('includes.form_errors')
    </div>
@stop



