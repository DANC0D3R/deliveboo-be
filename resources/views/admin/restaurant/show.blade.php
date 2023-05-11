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
                        @else
                            <img src="data:image/png;base64,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" alt="">
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
