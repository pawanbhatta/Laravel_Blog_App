@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <a href="/posts" class="btn btn-default">Go Back</a>
    <hr>
    <h1><a href="/posts/{{$post->id}}/edit">{{$post->title}}</a></h1>
    <img style="heigth:200px; background-color:powderblue;" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    {{-- checks if authenticated user is not a guest user, i.e. user must be logged in to edit or delete their post --}}
    @if (!Auth::guest())   
    {{-- checks if the post belongs to its owner (authenticated(logged in)) user --}}
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
            {!!Form::close() !!}        
        @endif
    @endif

</div>

@endsection