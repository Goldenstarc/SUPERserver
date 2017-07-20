@extends('layouts.admin')



@section('content')

    <div class="col-sm-6">
        <h1>Barands</h1>
        {!! Form::open(['method'=>'POST', 'action'=> 'AdminCategoriesController@store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name' , null ,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('url', 'WebSite:') !!}
            {!! Form::text('url' , null ,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Barands', ['class'=>'btn btn-primary'])!!}
        </div>

        {!! Form::close() !!}


    </div>

    <div class="col-sm-6">

        <table class="table">
            <thead>
            <tr>
                <th>Logo</th>
                <th>Id</th>
                <th>Name</th>
                <th>web site</th>
                <th>Created date</th>
            </tr>
            </thead>
            <tbody>

            @if($barands)
                @foreach($barands as $barand)
                    <tr>
                        <td></td>
                        <td>{{$barand->id}}</td>
                        <td><a href="{{route('admin.barands.edit', $barand->id)}}">{{$barand->name}} </a></td>
                        <td><a href="{{$barand->url}}"></a> </td>
                        <td>{{$cat->created_at->diffForHumans()}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif







    </div>






@stop