@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
        <div class="container">
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <a href="/lsapp/posts/{{$post->id}}" class="btn btn-default"><img style="width:100%; height:90%;" src="/lsapp/public/storage/cover_images/{{$post->cover_image}}"></a>
    {{-- <a href="/lsapp/posts/{{$post->id}}"><img style="width:100%; height:90%; background-color:powderblue; " src="{{ asset('/storage/cover_images/{{$post->cover_image}}') }}"></a> --}}
                        
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/lsapp/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{$posts->links()}}
    @else
            <p>No Posts fouond</p>
    @endif
@endsection