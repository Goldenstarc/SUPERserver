@extends('layouts.admin')



@section('content')

    <div class="col-sm-6">
        <h1>Brands</h1>
        {!! Form::open(['method'=>'POST', 'action'=> 'AdminBrandsController@store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name' , null ,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('url', 'WebSite:') !!}
            {!! Form::text('url' , null ,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id' , null,['class'=>'form-control'])!!}
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

            @if($brands)
                @foreach($brands as $brand)
                    <tr>
                        <td><img height="50" src="{{asset($brand->photo ? $brand->photo->file : (new \App\Photo())->file)}}"></td>
                        <td>{{$brand->id}}</td>
                        <td><a href="{{route('admin.brands.edit', $brand->id)}}">{{$brand->name}} </a></td>
                        <td><a href="{{$brand->url}}">{{$brand->url}}  </a> </td>
                        <td>{{$brand->created_at->diffForHumans()}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif







    </div>






@stop