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
                            <img src="{{ $food->img }}" alt="{{ $food->name }}">
                            @else
                            <img src="{{asset('storage/'. $food->img)}}" alt="{{ $food->name }}">
                            @endif
                        </div>
                        @else
                            {{-- Placeholder --}}
                            <img src="data:image/png;base64,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" alt="">
                        @endif

                        <div class="text-container">
                            
                            <h6>Ingredienti</h6>
                            {{-- Descrizione del piatto --}}
                            <p>{{ $food->description }}</p>
                    
                            <h6>Prezzo</h6>
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
                                    <i class="fa-solid fa-wheat-awn gluten"></i>
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

                <div  class="button-container my-4">
                    <a href="{{ route('admin.foods.index') }}" class="btn back-button">
                        <i class="fa-solid fa-arrow-left"></i> Torna indietro
                    </a>
                </div>

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
    .type, .gluten   {
        background-color: green;
        color: white;
        padding: 0.4rem;
        font-size: 0.7rem;
        text-align: center;
        border-radius: 50%;
        border: none;
    }
    .gluten{
        background-color: #FFD966;
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