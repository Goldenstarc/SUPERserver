@extends('layouts.admin')



@section('content')


    <h1>ProductSpecifications</h1>


    <div class="col-sm-6">
        <h1>ProductSpecification</h1>
        {!! Form::open(['method'=>'POST', 'action'=> 'AdminProductSpecificationController@store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name' , null ,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('type', 'Type:') !!}
            {!! Form::select('type' , ['select Type'] + $types , null ,['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
            {!! Form::submit('Create ProductSpecification', ['class'=>'btn btn-primary'])!!}
        </div>
        {!! Form::close() !!}


        <div class="row">
            @include('includes.form_errors')
        </div>


    </div>

    <div class="col-sm-6">

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>type</th>
                <th>Created</th>
                <th>Updated</th>
                <th>changed by</th>
            </tr>
            </thead>
            <tbody>

            @if($specifications)
                @foreach($specifications as $spf)
                    <tr>
                        <td>{{$spf->id}}</td>
                        <td><a href="{{route('admin.psf.edit', $spf->id)}}">{{$spf->name}} </a></td>
                        <td>{{$spf->type}}</td>
                        <td>{{$spf->created_at->diffForHumans()}}</td>
                        <td>{{$spf->updated_at->diffForHumans() }}</td>
                        <td>{{$spf->user ? $spf->user->name : 'not find'}}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif










    </div>



@stop