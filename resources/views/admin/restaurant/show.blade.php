@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <h1>Il mio ristorante</h1>
    <div class="row justify-content-center mb-4">
        <div class="col">
            <div class="card w-50 p-3">
                <div class="d-flex">
                    <h2 class="me-2">{{ $restaurant->id }} -</h2>
                    <h2>{{ $restaurant->name }}</h2>
                    <h6 class="ms-3 ">{{ $restaurant->address }}</h6>
                    <h4>{{ $restaurant->type }}</h4>
                </div>
                @if ($restaurant->img)
                    <img src="{{ asset('storage/'.$restaurant->img) }}" class="mb-3" alt="immagine" style="height: 200px; width: 300px">
                @endif
                <p>{{ $restaurant->description }}</p>
                <h6>Contatti:</h6>
                <div class="contacts d-flex">
                    <h6>Cellulare: {{ $restaurant->phone }}</h6>
                    <h6 class="ms-3">Partita IVA: {{ $restaurant->p_iva }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
