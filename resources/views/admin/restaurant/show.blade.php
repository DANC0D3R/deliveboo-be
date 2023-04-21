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
                <div class="restaurant-card d-flex py-5">

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

                    <div class="text-container shadow col-7">

                        {{-- Indirizzo ristorante --}}
                        <div>
                            <p>
                                <i class="fa-solid fa-location-dot"></i>
                                {{ $restaurant->address }}
                            </p>
                        </div>

                        {{-- Tipologia ristorante --}}
                        <div>
                        
                            @if (count($restaurant->types) > 0)
                                @foreach ($restaurant->types as $type)
                                    <p>
                                        @if (!empty($type->name)) 
                                            {{ $type->name }}
                                        
                                        @endif
                                    </p>
                                @endforeach
                            @else
                                Non specificato.
                            @endif
                        </div>

                        {{-- Descrizione --}}
                        <div>
                            {{ $restaurant->description }}
                        </div>

                        {{-- Contatti --}}
                        <div>
                            <h6>
                                {{ $restaurant->phone }}
                            </h6>
                        </div>

                        {{-- P.IVA --}}
                        <div>
                            <h6>
                                {{ $restaurant->p_iva }}
                            </h6>
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
    .text-container{
        border-radius:20px;
        padding: 25px 15px;
        background-color: #FFF2CC;
    }
</style>
