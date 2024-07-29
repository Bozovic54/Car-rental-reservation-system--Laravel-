@extends('layouts.main')
@section('main')
    <h1>{{$auto->marka}} {{$auto->model}}</h1>
    <form method="post" action="{{route('auto.rezervacija',['id'=>$auto->id])}}">
        @csrf
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="ime">
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="prezime">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" name="datum">
        </div>
        <div class="form-group">
            <label>Days</label>
            <input type="number" class="form-control" name="broj_dana">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control" value="Submit" >
        </div>
        <div class="form-group">
            <a href="{{ route('homepage') }}" class="btn btn-primary">Back to Home</a>
        </div>
    </form>
@endsection