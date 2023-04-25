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
                        <div class="mb-3">
                            <h6 class="orange">Indirizzo</h6>
                            <p>
                                <i class="fa-solid fa-location-dot"></i>
                                {{ $restaurant->address }}
                            </p>
                        </div>

                        {{-- Tipologia ristorante --}}
                        <div class="mb-3">
                        <h6 class="orange">Tipologia</h6>
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
                        <div class="mb-3">
                            <h6 class="orange">Descrizione</h6>
                            <p>
                                {{ $restaurant->description }}
                            </p>
                        </div>

                        {{-- Contatti --}}
                        <div class="mb-3">
                            <h6 class="orange">
                                Contatti
                            </h6>
                            <p>
                                <i class="fa-solid fa-phone"></i>
                                {{ $restaurant->phone }}
                            </p>
                        </div>

                        {{-- P.IVA --}}
                        <div class="mb-3">
                            <h6 class="orange">
                                Partita iva
                            </h6>
                            <p>
                                <i class="fa-solid fa-circle-info"></i>
                                {{ $restaurant->p_iva }}
                            </p>
                        </div>

                    </div>

                </div>
            </div>

            {{-- Back button --}}
            <div  class="button-container my-3">
                <a href="{{ route('admin.restaurants.index') }}" class="btn back-button">
                    <i class="fa-solid fa-arrow-left"></i> Torna indietro
                </a>
            </div>

        </div>
    </div>

@endsection

<style>

    .orange{
        color: #FF8400;
    }
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

    /* BACK BUTTON */
    .back-button{
        background-color: #FF8400 !important;
    }

    .button-container a{
        color: white;
    }
    .button-container a:hover{
        background-color: #FFA559 !important;
        color: white;
    }
</style>
