@extends('layouts.admin')





@section('content')

    <h1>Users </h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
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
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role ? $user->role->name : 'Has no role'}}</td>
                    <td>{{$user->is_active == 1 ? 'Active' : 'No Active'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans() }}</td>
                </tr>
            @endforeach
        @endif
@stop