@extends('layouts.app')

@section('content')
  <div class="container">
        <h1>Establishment</h1>
        @if(count($establishments) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Constituent</th>
                        <th scope="col">Establishment</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($establishments as $establishment)
                        <tr>
                            <th scope="row">{{$establishment->id}}</th>
                            <td>{{$establishment->fk_constituent }}</td>
                            <td>{{$establishment->co_name }}</td>
                            <td>
                                <a href="{{route('establishments.show', $establishment->id)}} " class="btn btn-info">show</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $establishments->links('pagination::bootstrap-4') }}
        @else
        <p>No post found</p>
        @endif
        <a href="/patients/create" class="btn btn-primary">Add Patient</a>
    </div>
@endsection
