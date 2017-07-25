@extends('layouts.admin')



@section('content')
    @if(Session::has('deleted_user'))
        <p class="bg-danger">{{session('deleted_user')}}</p>
    @endif

    <h1>Users </h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <td>Photo</td>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>status</th>
            <th>Create</th>
            <th>Update</th>
        </tr>
        </thead>
        <tbody>


        @if($users)
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><img height="50" src="{{asset($user->photo ? $user->photo->file : (new \App\Photo())->file)}}"></td>
                    <td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role ? $user->role->name : 'Has no role'}}</td>
                    <td>{{$user->is_active == 1 ? 'Active' : 'No Active'}}</td>
                    <td>{{$user->created_at ? $user->created_at->diffForHumans() : 'not set'}}</td>
                    <td>{{$user->updated_at ? $user->updated_at->diffForHumans() : 'not set'}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
        @endif
@stop