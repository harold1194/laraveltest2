@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{form::label('title', 'Title')}}
            {{form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{form::label('body', 'Body')}}
            {{form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body'])}}
        </div>
        {{form::hidden('_method', 'PUT')}}
        {{form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection