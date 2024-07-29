@extends('layouts.main')
@section('main')
    <h1>All Reservations</h1>
    <table class="table">
        <thead>
            <th>Vehicle</th>
            <th>Date</th>
            <th>Status</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($rezervacije as $r)
                <tr>
                    <td>{{$r->auto->marka}} {{$r->auto->model}}</td>
                    <td>{{$r->datum}}</td>
                    <td>
                        @if($r->status == -1)
                            Received
                        @elseif($r->status == 0)
                            Rejected
                        @else
                            Accepted
                        @endif
                    </td>
                    <td><a href="{{route('rezervacija.detaljno', ['id'=>$r->id])}}">Details</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('homepage') }}" class="btn btn-primary">Back to Home</a>
@endsection
