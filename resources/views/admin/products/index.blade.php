@extends('layouts.admin')



@section('content')


    <h1>Products </h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>create by</th>
            <th>Category</th>
            <th>Created</th>
            <th>Updated</th>
            <th>price</th>
            <th>min price</th>
            <th>off</th>
            <th>Short Description</th>
            <th>long Description</th>
        </tr>
        </thead>
        <tbody>

        @if($products)
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td><img height="50" src="{{asset($product->photo ? $product->photo->file : (new \App\Photo())->file)}}"></td>
                    <td><a href="{{route('admin.products.edit', $product->id)}}">{{$product->user->name}} </a></td>
                    <td>{{$product->category ? $product->category->name : 'Uncategorized!)'}}</td>
                    <td>{{$product->created_at->diffForHumans()}}</td>
                    <td>{{$product->updated_at->diffForHumans() }}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->min_price}}</td>
                    <td>{{$product->off}}</td>
                    <td>{{str_limit($product->short_description,50)}}</td>
                    <td>{{str_limit($product->long_description,75)}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif

@stop