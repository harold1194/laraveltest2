@extends('layouts.app')

@section('content')
  <div class="container">
        <h1>Constituent</h1>
        @if(count($constituents) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fake Person Id</th>
                        <th scope="col">QR Code</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Purok</th>
                        <th scope="col">Brgy ID</th>
                        <th scope="col">City</th>
                        <th scope="col">Province</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($constituents as $constituent)
                        <tr>
                            <th scope="row">{{$constituent->id}}</th>
                            <td>{{$constituent->fk_personid }}</td>
                            <td>{{$constituent->qrcode }}</td>
                            <td>{{$constituent->lat}}</td>
                            <td>{{$constituent->lng}}</td>
                            <td>{{$constituent->purok}}</td>
                            <td>{{$constituent->brgyid}}</td>
                            <td>{{$constituent->city}}</td>
                            <td>{{$constituent->province}}</td>
                            <td>
                                <a href="{{route('constituents.show', $constituent->id)}} " class="btn btn-info">show</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $constituents->links('pagination::bootstrap-4') }}
        @else
        <p>No post found</p>
        @endif
        <a href="/patients/create" class="btn btn-primary">Add Patient</a>
    </div>
@endsection
