@extends('template')

@section('title')
    Blog Sbezz
@stop

@section('content')

    <h1>Blog Sbezz</h1>

    <br />
    
        @foreach($postagens as $postagen)

            <p>{{ $postagen }}</p>
            <br />
        @endforeach

@stop