@extends('admin.dashboard') {{-- Con questo percorso pacciamo sì che la show del ristorante estenda la dashboard --}} 

@section('restaurant_show') {{-- Il codice contenuto in questa section andrà a riempire lo yeld che ho messo in Dashboard--}} 

    <div class="container-fluid mt-4">
        <h1>Il mio ristorante</h1>
        <div class="row justify-content-center mb-4">
            <div class="col">

                {{-- Messaggio successo --}}
                @include('partials.success')
                
                <div class="card w-50 p-3">
                    <div class="d-flex">
                        {{-- id --}}
                        <h2 class="me-2">{{ $restaurant->id }} -</h2>

                        {{-- Nome ristorante --}}
                        <h2>{{ $restaurant->name }}</h2>
                        <br>
                        {{-- Indirizzo ristorante --}}
                        <h6 class="ms-3 ">{{ $restaurant->address }}</h6>

                        {{-- Tipologia ristorante --}}
                        <h3 class="mb-3">Tipologia di ristorante: 
                            @if (count($restaurant->types) > 0)
                                @foreach ($restaurant->types as $type)
                                    <span class="pb-3 fw-bold">
                                        @if (!empty($type->name)) 
                                            | {{ $type->name }} |
                                        
                                        @endif
                                    </span>
                                @endforeach
                            @else
                                Non specificato.
                            @endif
                        </h3>
                    </div>

                    {{-- Immagine --}}
                    @if ($restaurant->img)
                        <img src="{{ asset('storage/'.$restaurant->img) }}" class="mb-3" alt="immagine" style="height: 200px; width: 300px">
                    @endif

                    {{-- Descrizione --}}
                    <p>{{ $restaurant->description }}</p>

                    {{-- Contatti --}}
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
