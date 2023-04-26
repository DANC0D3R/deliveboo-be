@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            
            <div class="mt-4">
                {{-- Messaggio di errore (non riesco a farlo visualizzare) --}}
                @include('partials.error')

                <h2>
                    <!-- Prendo il nome dell'utente loggato -->
                    Benvenut* {{ Auth::user()->name }}!
                </h2>

                <p>
                    Utilizzando la nostra piattaforma potrai permettere ai clienti <br>
                    di gustarsi i piatti del tuo ristorante direttamente da casa!
                </p>
            </div>
            
            <div class="dash-card shadow">
                
                <p>
                    In questa area personale puoi:
                    <ul>
                        <li>
                            Inserire e visualizzare i dati del tuoi ristorante, dalla voce <br>
                            <a href="{{ url('admin/restaurants') }}"><strong class="orange">"Il tuo ristorante"</strong></a>
                        </li>
                        <li>
                            Visualizzare il tuo menu, inserire nuovi piatti, modificarli ed eliminare con semplicità le vecchie portate, dalla voce <br>
                            <a href="{{route('admin.foods.index')}}"><strong class="orange">"Menù"</strong></a>
                        </li>
                        <li>
                            Visualizzare gli ordini ricevuti dai clienti, dalla voce <br>
                            <a href="{{route('admin.orders.index')}}"><strong class="orange">"Ordini"</strong></a>
                        </li>
                        <li>
                            Visualizzare le statistiche degli ordini ricevuti per mese e/o anno, dalla voce <br>
                            <a href="#"><strong class="orange">"Statistiche"</strong></a>
                        </li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .orange{
        color: #FF8400;
    }

    .dash-card{
        border-radius:20px;
        padding: 25px 15px;
        background-color: #FFF2CC;
    }
    li{
        margin-bottom: 15px;
    }
    li a{
        text-decoration: none;
    }
</style>