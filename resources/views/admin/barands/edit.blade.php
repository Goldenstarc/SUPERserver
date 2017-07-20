@extends('layouts.admin')



@section('content')


    <h1>Categories</h1>


    <div class="col-sm-6">
        <h1>Barands</h1>
        {!! Form::open(['method'=>'POST', 'action'=> 'AdminBarandsController@store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name' , null ,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Barand', ['class'=>'btn btn-primary'])!!}
        </div>
        {!! Form::close() !!}


    </div>

    <div class="col-sm-6">

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>webSite</th>
                <th>Created date</th>
            </tr>
            </thead>
            <tbody>

            @if($categories)
                @foreach($categories as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td><a href="{{route('admin.categories.edit', $cat->id)}}">{{$cat->name}} </a></td>
                        <td>{{$cat->created_at->diffForHumans()}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif







    </div>






@stop