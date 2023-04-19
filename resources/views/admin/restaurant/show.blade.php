@extends('layouts.admin') 

@section('content') {{-- Il codice contenuto in questa section andrà a riempire lo yeld che ho messo in Dashboard--}} 

    <div class="container-fluid  mt-4">
        <h1>{{ $restaurant->name }}</h1>
        <div class="row  mb-4">
            <div class="col">

                {{-- Messaggio successo --}}
                @include('partials.success')
                
                <div class=" card w-50 p-3">
                    <div class="">
                        <!-- {{-- id --}}
                        <h2 class="me-2">{{ $restaurant->id }} -</h2> -->

                        <!-- {{-- Nome ristorante --}}
                        <h2>{{ $restaurant->name }}</h2>
                        <br> -->
                        {{-- Indirizzo ristorante --}}
                        <div>
                            <h6 class="ms-3 ">Indirizzo:{{ $restaurant->address }}</h6>
                        </div>

                        {{-- Tipologia ristorante --}}
                        <div>
                            <h6 class="mb-3">Tipologia di ristorante:
                            </h6>
                        </div>
                        
                            
                                    @if (count($restaurant->types) > 0)
                                        @foreach ($restaurant->types as $type)
                                            <ul class="pb-3 fw-bold">
                                                <li>
                                                    @if (!empty($type->name)) 
                                                        {{ $type->name }}
                                                    
                                                    @endif
                                                </li>
                                            </ul>
                                        @endforeach
                                    @else
                                        Non specificato.
                                    @endif
                            
                        
                        
                    </div>

                    {{-- Immagine --}}
                    @if ($restaurant->img)
                        <img src="{{ asset('storage/'.$restaurant->img) }}" class="mb-3" alt="immagine" style="height: 200px; width: 300px">
                    @endif

                    {{-- Descrizione --}}
                    <h4>Descrizione:</h4>
                    <ul>
                        <li>
                            {{ $restaurant->description }}  
                        </li>
                    </ul>

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
