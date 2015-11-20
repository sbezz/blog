@extends('template')

@section('title')
    Blog Admin
@stop

@section('content')

    <h1>Area Restrita Blog Sbezz - Edit Post</h1>
    <h2>Title: {{ $post->title }}</h2>

    <hr>
    <br />

    @if($errors->any())

       <ul class="alert">
           @foreach($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>

    @endif
    {!! Form::model($post, ['route'=>['admin.posts.update', $post->id], 'method' => 'put']) !!}

    @include('admin.posts._form')

    <div class="form-group">
       {!! Form::label('tags', 'Tags:', ['class'=> 'control-label'])  !!}
       {!! Form::textarea('tags', $post->tagList, ['class'=> 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Edit Post', ['class'=>'btn-primary'])  !!}
    </div>

    <div>
        @foreach($post->tags as $tag)
            <li>{{ $tag->name }}</li>
        @endforeach
    </div>

    {!! Form::close() !!}

@stop