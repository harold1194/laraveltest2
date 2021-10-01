@extends('layouts.admin')

@section('content')
    <h1>Patient List</h1>
    @if (count($patients) > 1)
        @foreach ($patients as $patient)
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h3><a href="/patients/{{$patient->id}}">{{$patient->fk_constituentid}}</a></h3>
                        <small>Written on {{$patient->date_diagnose}}</small>
                    </li>
                </ul>
            </div>
        @endforeach
    @endif
@endsection
