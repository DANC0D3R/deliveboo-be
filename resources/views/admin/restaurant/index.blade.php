@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">

        {{-- Utente già regostrato --}}
        @if(count($restaurant)>0)
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <div class="restaurant-card mt-4 shadow">
                        <h2 class="mb-3">
                            {{ $restaurant[0]->name }}
                        </h2>

                        <p class="mb-1">
                            <i class="fa-solid fa-location-dot"></i>
                            {{ $restaurant[0]->address }}
                        </p>

                        <p>
                            {{ $restaurant[0]->description }}
                        </p>

                        {{-- Pulsante di show del ristorante --}}
                        <a href="{{ route('admin.restaurants.show', $restaurant[0]) }}" class="btn details mb-2">
                            Dettagli
                        </a>

                        {{-- Pulsante di modifica ristorante --}}
                        <a href="{{ route('admin.restaurants.edit', $restaurant[0]) }}" class="btn btn-warning mb-2">
                            Modifica
                        </a>

                        {{-- eliminazione tramite modale --}}
                        <button class="crud-button delete btn btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#deleteModal_{{ $restaurant[0]->id }}">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>

                        <div class="modal fade" id="deleteModal_{{ $restaurant[0]->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimminazione ristorante</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        Confermi di voler eliminare {{ $restaurant[0]->name }}?
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                        
                                        <form action="{{ route('admin.restaurants.destroy', $restaurant[0]->id) }}" method="POST" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            @csrf
                                            @method('DELETE')

                                            {{-- Pulsante delete --}}
                                            <button class="btn btn-danger">Elimina</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        {{-- Utente registrato che non ha un ristorante --}}
        @else
            <div class="home-jumbotron py-4 row justify-content-center">

                <div class="col-md-8">

                    <h1 class="custom-color mb-3">Ciao {{ Auth::user()->name }}!</h1>

                    <div class="container rounded-4 p-5 presentation-banner shadow welcome-container">

                        <h3 class="mb-3">DeliveBoo,la piattaforma che ti permette di gestire il tuo ristorante</h3>
                        
                        <p>In questa sezione con un semplice click inserisci i dati della tua attività</p>
                        <a href="{{ route('admin.restaurants.create') }}" class="btn btn-success">
                                Inserisci ristorante
                        </a>
                    </div>

                </div>
            </div>
        @endif
    </div>
@endsection
<style scoped>
.container{
    background-color: #FFF2CC !important;
}
.details{
    background-color: #FF8400 !important;
    color: white !important;
}

.restaurant-card{
    border-radius:20px;
    padding: 25px 15px;
    background-color: #FFF2CC;
}
   
</style>