@extends('layouts.admin')



@section('content')


    <h1>Posts </h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Owner</th>
            <th>Category</th>
            <th>title</th>
            <th>body</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="50" src="{{asset($post->photo ? $post->photo->file : (new \App\Photo())->file)}}"></td>
                    <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->user->name}} </a></td>
                    <td>{{$post->category ? $post->category->name : 'Uncategorized!)'}}</td>      <!-- TODO change category to gategory in data base and here-->
                    <td>{{$post->title}}</td>
                    <td>{{str_limit($post->body,30)}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans() }}</td>


                </tr>
    @endforeach
    @endif

@stop