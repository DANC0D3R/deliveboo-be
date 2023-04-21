@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col">
                {{-- success --}}
                @include('partials.success')
            </div>

        </div>
        <div class="row g-3 justify-content-center">
            <div class="col-8 mb-3">
                <div class="card food-card my-3">
                    <div class="card-body">

                        {{-- Nome del piatto --}}
                        <h3 class="text-center mb-3">
                            {{ $food->name }}
                        </h3> 

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

                        <div class="text-container">
                            
                            <h5>Ingredienti:</h5>
                            {{-- Descrizione del piatto --}}
                            <p>{{ $food->description }}</p>
                    
                            <h5>Prezzo:</h5>
                            {{-- Prezzo del piatto --}}
                            <p>{{ $food->price }}€</p>

                            {{-- Tipologia del piatto --}}
                            <div class="mb-1">
                                @if ($food->vegetarian == true)
                                    <i class="fa-solid fa-leaf type"></i>
                                    <span>Il piatto è <strong>Vegetariano</strong></span>
                                @endif
                            </div>

                            <div class="mb-3">
                                @if ($food->vegan == true)
                                    <i class="fa-solid fa-leaf type"></i>
                                    <span>Il piatto è <strong>Vegano</strong></span>
                                @endif
                            </div>
                            
                            <div class="mb-3">
                                @if ($food->glutenfree == true)
                                    <i class="fa-regular fa-wheat-awn-slash type"></i>
                                    <span>Il piatto è <strong>Senza Glutine</strong></span>
                                @endif
                            </div>

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
                        {{-- Bottoni --}}
                        <div>
                            {{-- Pulsante edit --}}
                            <a href="{{ route('admin.foods.edit', $food->id) }}" class="btn btn-warning edit">
                                Modifica
                            </a>
                            {{-- Pulsante delete --}}
                            <button class="btn btn-danger">Elimina</button>
                        </div>
                    </div>
                </div>
            </div>

            <div  class="button-container mb-3">
                <a href="{{ route('admin.foods.index') }}" class="btn back-button">
                    <i class="fa-solid fa-arrow-left"></i> Torna indietro
                </a>
            </div>

        </div>


    </div>
@endsection


<style scoped>

    /* CARD */
    .food-card{
        padding: 0 2rem;
    }
    .food-card img{
        border-radius: 15px;
        width: 100%;
        margin-bottom: 2rem;
    }

    /* VEGETARIANO, VEGANO E SENZA GLUTINE*/
    .type   {
        background-color: green;
        color: white;
        padding: 0.4rem;
        font-size: 0.7rem;
        text-align: center;
        border-radius: 50%;
        border: none;
    }

    /* DISPONIBILITA */
    .green{
        color: green;
    }
    .red{
        color: red;
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