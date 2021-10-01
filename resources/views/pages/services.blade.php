@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @foreach ($services as $service)
        <li>{{$service}}</li>
    @endforeach
@endsection