@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <div class="success">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>

                <div class="text-center mb-3 title-container">
                    <h1 class="my-3">
                        I tuoi prodotti
                    </h1>

                    {{-- Pulsante create --}}
                    <a href="{{ route('admin.foods.create') }}" class="btn create">
                        <i class="fa-solid fa-plus"></i> Inserisci un nuovo piatto
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="row g-3">
            @foreach ($foods as $food)
                <div class="col-4 mb-3">
                    <div class="card food-card">
                        <div class="card-body">

                            {{-- Immagine --}}
                            @if ($food->img)
                            <div>
                                @if(str_contains($food->img, "https"))
                                <img src="{{ $food->img }}" alt="{{ $food->name }}">
                                @else
                                <img   src="{{asset('storage/'. $food->img)}}" alt="{{ $food->name }}">
                                @endif
                            </div>
                            @else
                            {{-- Placeholder --}}
                            <img src="data:image/png;base64,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" alt="">
                            @endif

                            <div>
                                {{-- Nome piatto --}}
                                <h3 class="card-title">{{ $food->name }}</h3>
            
                                {{-- Prezzo piatto --}}
                                <p class="card-title">{{$food->price}}€</p>

                                {{-- Descrizione piatto --}}
                                <p class="card-title mb-2">{{$food->description}}</p>

                                {{-- Disponibilità del piatto --}}
                                <div class="disponibilità mt-1">
                                    @if ($food->availability == true)
                                        <p class="green"><strong>
                                            Disponibile
                                        </strong></p>
                                    @else
                                        <p class="red"><strong>
                                            Non Disponibile
                                        </strong></p>
                                    @endif
                                </div>
                            </div>

                            <div class="button-container d-flex my-2">

                                {{-- Pulsante show --}}
                                <a href="{{ route('admin.foods.show', $food->id) }}" class="crud-button show"> 
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                {{-- Pulsante edit --}}
                                <a href="{{ route('admin.foods.edit', $food->id) }}" class="crud-button edit">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                            
                                {{-- eliminazione tramite modale --}}
                                <button class="crud-button delete" data-bs-toggle="modal" data-bs-target="#deleteModal_{{ $food->id }}">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>

                                <div class="modal fade" id="deleteModal_{{ $food->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimminazione piatto</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Confermi di voler eliminare {{ $food->title }}?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                            <form action="{{ route('admin.foods.destroy', $food->id) }}" method="POST" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
            @endforeach
        </div>
</div>
@endsection

<style scoped>

    /* TITOLO + CREATE */
    .title-container .create{
        background-color: #FF8400 !important;
    }

    .title-container a{
        color: white;
    }

    .title-container a:hover{
        background-color: #FFA559 !important;
        color: white;
    }

    /* CARDS */

    .food-card{
        min-height: 500px;
        cursor: pointer;
    }
    .food-card:hover{
        border:#FF8400;
        box-shadow: 0px 0px 6px 0px rgba(255,165,89,0.60);
    }
    .food-card .card-body{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    img{
        width: 100%;
        border-radius: 15px;
        margin-bottom: 1rem;
    }
    /* DISPONIBILITA */
    .disponibilità{
        font-size: 0.8rem;
    }
    .green{
        color: green;
    }
    .red{
        color: red;
    }


    /* CRUD BUTTON */
    .button-container{
        justify-content: center;
        align-items: center;
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