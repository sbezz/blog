@extends('template')

@section('title')
    Blog Admin
@stop

@section('content')

    <h1>Area Restrita Blog Sbezz - Create New Post</h1>
    <hr>
    <br />

    @if($errors->any())

       <ul class="alert">
           @foreach($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>

    @endif
    {!! Form::open(['route'=>'admin.posts.store', 'method' => 'post']) !!}

    @include('admin.posts._form')

    <div class="form-group">
        {!! Form::label('tags', 'Tags:', ['class'=> 'control-label'])  !!}
        {!! Form::textarea('tags', null, ['class'=> 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn-primary'])  !!}
    </div>

    {!! Form::close() !!}

@stop