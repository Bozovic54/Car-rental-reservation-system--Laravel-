@extends('layouts.main')
@section('main')
    <div class="container mt-4">
        <h1 class="mb-4">Reservation</h1>
        
        <div class="mb-3">
            <strong>Car:</strong> {{$rezervacija->auto->marka}} {{$rezervacija->auto->model}}
        </div>
        <hr class="my-2">
        <div class="mb-3">
            <strong>Date:</strong> {{$rezervacija->datum}}
        </div>
        <hr class="my-2">
        <div class="mb-3">
            <strong>Days:</strong> {{$rezervacija->broj_dana}}
        </div>
        <hr class="my-2">
        <div class="mb-3">
            <strong>Person:</strong> {{$rezervacija->ime}} {{$rezervacija->prezime}}
        </div>
        <hr class="my-2">
        <div class="mb-3">
            <strong>Status:</strong>
            <form action="{{ route('promena.statusa', ['id' => $rezervacija->id]) }}" method="post" class="form-inline">
                @csrf
                <div class="form-group mr-2">
                    <select name="status" class="form-control">
                        <option value="1">Accepted</option>
                        <option value="0">Rejected</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <hr class="my-2">
        <div class="mb-3">
            <a href="{{ route('spisak') }}" class="btn btn-primary">Back to reservations</a>
        </div>
    </div>
@endsection
