@extends('layouts.admin') 

@section('content') {{-- Il codice contenuto in questa section andrà a riempire lo yeld che ho messo in Dashboard--}} 

    <div class="container-fluid  mt-4">

        <div class="row mb-4">
            <div class="col">

                {{-- Messaggio successo --}}
                @include('partials.success')

                {{-- Nome --}}
                <div>
                    <h2>{{ $restaurant->name }}</h2>
                </div>
            </div>

            <div class="row">
                <div class="restaurant-card d-flex py-5 shadow">

                    <div class="img-container col-5">
                        {{-- Immagine --}}
                        @if ($restaurant->img)
                        <div>
                            @if(str_contains($restaurant->img, "https"))
                                <img src="{{ $restaurant->img }}"  alt="{{ $restaurant->name }}">
                            @else
                                <img src="{{asset('storage/'. $restaurant->img)}}" alt="{{ $restaurant->name }}">
                            @endif
                        </div>
                        @endif 
                    </div>

                    <div class="text-container col-7">

                        {{-- Indirizzo ristorante --}}
                        <div>
                            <p>
                                <i class="fa-solid fa-location-dot"></i>
                                {{ $restaurant->address }}
                            </p>
                        </div>

                        {{-- Tipologia ristorante --}}
                        <div>
                        <h6>Tipologia</h6>
                            @if (count($restaurant->types) > 0)
                            <ul>
                                @foreach ($restaurant->types as $type)
                                    <li>
                                        @if (!empty($type->name)) 
                                            {{ $type->name }}
                                        
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                            @else
                                Non specificato.
                            @endif
                        </div>

                        {{-- Descrizione --}}
                        <div>
                            <h6>Descrizione</h6>
                            <p>
                                {{ $restaurant->description }}
                            </p>
                        </div>

                        {{-- Contatti --}}
                        <div>
                            <h6>
                                Contatti
                            </h6>
                            <p>
                                {{ $restaurant->phone }}
                            </p>
                        </div>

                        {{-- P.IVA --}}
                        <div>
                            <h6>
                                Partita iva
                            </h6>
                            <p>
                                {{ $restaurant->p_iva }}
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

<style>
    .img-container img{
        border-radius: 20px;
        width: 80%;
    }
    .restaurant-card{
        border-radius:20px;
        padding: 25px 15px;
        background-color: white;
        border: 2px solid #FF8400;
    }
    p{
        margin: 10px 0;
    }
</style>
