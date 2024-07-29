@extends('layouts.main')
@section('main')
    <div class="container mt-5">
        <div class="jumbotron text-center">
            <h1 class="display-4">Welcome to Our Car Rental Service!</h1>
            <p class="lead">We offer a wide selection of cars at affordable prices. Browse our inventory and find the perfect car for your needs.</p>
            <hr class="my-4">
            <p>Book a car easily online and enjoy a hassle-free ride.</p>
        </div>
        <div id="cars" class="mt-4">
            <h2 class="mb-4 text-center">Our Car Inventory</h2>
            <div class="list-group">
                @foreach($automobili as $auto)
                    <a href="{{ route('auto.detaljno', ['id' => $auto->id]) }}" class="list-group-item list-group-item-action text-center">
                        {{ $auto->marka }} {{ $auto->model }}
                    </a>
                @endforeach
            </div>
        </div>
        
    </div>
@endsection
