@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $food->name }}</h1> {{-- Nome del piatto --}}
                <a href="{{ route('admin.foods.index') }}" class="btn btn-primary">
                    Torna indietro
                </a>
            </div>
        </div>
        <div class="row g-3">
            <div class="col mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <p>{{ $food->description }}</p> {{-- Descrizione del piatto --}}
                    </div>
                    <div class="card-body">
                        <p>{{ $food->price }}€</p> {{-- Prezzo del piatto --}}
                    </div>
                </div>
            </div>
        </div>

         {{-- Tipologia del piatto --}}
        <div>
            @if ($food->vegetarian == true)
                <p>Il piatto è vegetariano</p>
            @endif
            
            @if ($food->vegan == true)
                <p>Il piatto è vegano</p>
            @endif
        </div>

         {{-- Disponibilità del piatto --}}
        <div>
            @if ($food->availability == true)
                <p>Il piatto è disponibile all'acquisto.</p>
            @else
                <p>Il piatto è terminato</p>
            @endif
        </div>

        @if ($food->img)
            <div>
                <img src="{{ asset('storage/'.$food->img) }}" style="height: 300px;" alt="null">  {{-- Immagine del piatto --}}
            </div>
        @endif
    </div>
@endsection