@extends('layouts.admin')

@section('content')
    <h1>Post</h1>
    @if (count($diceases) > 1)
        @foreach ($diceases as $dicease)
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h3><a href="/diceases/{{$dicease->id}}">{{$dicease->diceases_name}}</a></h3>
                        
                    </li>
                </ul>
            </div>
        @endforeach
    @endif
@endsection