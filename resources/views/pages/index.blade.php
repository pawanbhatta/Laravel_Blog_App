@extends('layouts.app')

@section('content')

    <div class="text-center">
        <h1>{{$title}}</h1>
    </div>    

    <div class="container">
        <div class="jumbotron text-center">
            <h1>Join to create your Blog.</h1>
            <p><a href="/lsapp/login" class="btn btn-primary btn-lg" role="button">Login</a>
            <a href="/lsapp/register" class="btn btn-success btn-lg" role="button">Register</a> </p>
        </div>
    </div>
    
@endsection