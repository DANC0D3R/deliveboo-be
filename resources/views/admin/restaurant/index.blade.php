@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">

        {{-- Utente già regostrato --}}
        @if(count($restaurant)>0)
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <div class="card restaurant-card shadow">
                        <div class="card-body">
                            
                            {{-- Immagine --}}
                            @if ($restaurant[0]->img)
                            <div>
                                @if(str_contains($restaurant[0]->img, "https"))
                                    <img src="{{ $restaurant[0]->img }}"  alt="{{ $restaurant[0]->name }}">
                                @else
                                    <img src="{{asset('storage/'. $restaurant[0]->img)}}" alt="{{ $restaurant[0]->name }}">
                                @endif
                            </div>
                            @else
                                <img src="data:image/png;base64,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" alt="">
                            @endif

                            <div>
                                {{-- Nome piatto --}}
                                <h3 class="mb-3">
                                    {{ $restaurant[0]->name }}
                                </h3>

                                <p class="mb-3">
                                    <i class="fa-solid fa-location-dot"></i>
                                    {{ $restaurant[0]->address }}
                                </p>
                            </div>

                            <div class="button-container d-flex my-2">

                                {{-- Pulsante di show del ristorante --}}
                                <a href="{{ route('admin.restaurants.show', $restaurant[0]) }}" class="crud-button show">
                                    <i class="fa-solid fa-eye"></i>
                                </a>

                                {{-- Pulsante di modifica ristorante --}}
                                <a href="{{ route('admin.restaurants.edit', $restaurant[0]) }}" class="crud-button edit">
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                {{-- eliminazione tramite modale --}}
                                <button class="crud-button delete" data-bs-toggle="modal" data-bs-target="#deleteModal_{{ $restaurant[0]->id }}">
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


.card-body{
    border-radius:20px;
    background-color: white;
    border:2px solid #FF8400;
}
.restaurant-card{
    border-radius:20px !important;
}
.card-body img{
    border-radius: 20px;
    width: 100%;
}

/* Crud button */
.button-container{
        justify-content: center;
    }
    .crud-button{
        color: white;
        margin-left: 1rem;
        padding: 1rem;
        text-align: center;
        border-radius: 50%;
        border: none;
    }
    .crud-button:hover{
        color: white;
        box-shadow: 0px 0px 6px 0px rgba(0,0,0,0.40);
    }
    .show{
        background-color: #FFA559;
    }
    .edit{
        background-color: #FF8400;
    }
    .delete{
        background-color: red;
    }
   
</style>