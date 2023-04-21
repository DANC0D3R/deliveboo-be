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
                                <img src="{{ $food->img }}" style="height: 300px" alt="{{ $food->name }}">
                                @else
                                <img   src="{{asset('storage/'. $food->img)}}" style="height: 300px" alt="{{ $food->name }}">
                                @endif
                                {{-- Placeholder --}}
                                {{-- <img src="https://www.cucchiaio.it/content/cucchiaio/it/ricette/2020/04/pasta-alla-zozzona/jcr:content/imagePreview.img10.jpg/1588238376193.jpg" alt=""> --}}
                            </div>
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