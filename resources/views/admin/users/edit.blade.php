@extends('layouts.admin')

@section('content')
    <h1>Edit Users</h1>

        <div class="row">
            <div class="col-sm-3">
                <img height="150" src="{{asset($user->photo ? $user->photo->file : (new \App\Photo())->file)}}" class="img.img-responsive.img-rounded img-thumbnail">

            </div>




            <div class="col-sm-9">
            {!! Form::model($user,['method'=>'PATCH', 'action'=> ['AdminUserController@update', $user->id],'files'=>true]) !!}
            {{csrf_field()}}
            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name' , null ,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('email','Email') !!}
                {!! Form::email('email', null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id','Image:') !!}
                {!! Form::file('photo_id', null,['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('role_id','Role:') !!}
                {!! Form::select('role_id' ,[''=>'Chose Option'] + $roles, null,['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('is_active','Status:') !!}
                {!! Form::select('is_active',array(1=>'Active' , 0=>'Not Active') , null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password','Password:') !!}
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>


            <div>
                {!! Form::submit('Update user', ['class'=>'btn btn-primary col-sm-6'])!!}

            </div>
            {!! Form::close() !!}




                {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminUserController@destroy' , $user->id],'class'=>'']) !!}
                <div class="form-group">
                    {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-6'])!!}
                </div>
                {!! Form::close() !!}


    </div>
    @include('includes.form_errors')


@stop