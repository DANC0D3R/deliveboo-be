@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-9">

            <h2 class="mb-3">Modifica il tuo piatto</h2>

            <form action="{{ route('admin.foods.update', $food->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div>
                    @include('partials.error')
                </div>

                <div class="mb-4">
                    {{-- Salvataggio Id ristorante dello user loggato --}}
                    <div class="d-none">
                        <input type="number" name="restaurant_id" value="{{ $targetRestaurant[0]->id }}">
                    </div>

                    {{-- Nome piatto --}}
                    <label for="name" class="form-laber @error('name') text-danger @enderror">Nome Piatto <strong class="orange">*</strong></label>
                    <input
                    class="d-block mb-2 form-control" 
                    id="name"
                    type="text"
                    placeholder="Scrivi qui..."
                    name="name"
                    value="{{ old('name', $food->name) }}"
                    maxlength="50"
                    required
                    >
                    @error('name')
                        <div class="alert alert-danger">Inserisci almeno un carattere</div>
                    @enderror
                </div>    

                <div class="mb-4">
                    {{-- Descrizione / Ingredienti --}}
                    <label for="description" form="form-label" class="@error('description') text-danger @enderror">Ingredienti <strong class="orange">*</strong></label>
                    <textarea 
                    class="d-block mb-2 form-control"
                    name="description" 
                    id="description" 
                    cols="50" 
                    rows="5"
                    required 
                    placeholder="Inserisci gli ingredienti del piatto">{{ old('description', $food->description) }}</textarea>
                    @error('description')
                        <div class="alert alert-danger">Inserisci almeno un ingrediente</div>
                    @enderror
                </div>

                <div class="mb-4">
                    {{-- Prezzo --}}
                    <label for="price" class="form-label" class="@error('price') text-danger @enderror">Prezzo € <strong class="orange">*</strong></label>
                    <input 
                    class="d-block mb-2 form-control"
                    id="price"
                    type="number"
                    placeholder="Es: 9.99"
                    name="price"
                    step="0.01"
                    min="0.00"
                    value="{{ old('price', $food->price) }}"
                    required
                    >
                    @error('price')
                        <div class="alert alert-danger">Inserisci almeno una cifra non negativa</div>
                    @enderror
                </div>

                {{-- Tipologie di piatto --}}
                <div class="mb-4">
                    <p class="mb-1">Tipologia del piatto</p>
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" value="1" name="vegetarian">
                        <label class="btn btn-outline-warning" for="btncheck1">Vegetariano</label>
                    
                        <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off" value="1" name="vegan">
                        <label class="btn btn-outline-warning" for="btncheck2">Vegano</label>
                    
                        <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off" value="1" name="glutenfree">
                        <label class="btn btn-outline-warning" for="btncheck3">Gluten Free</label>
                    </div>
                </div>

                <div class="mb-4">
                    {{-- Disponibilità del piatto --}}
                    <div class="form-check">
                        {{-- Input del piatto disponibile --}}
                        <input class="form-check-input" type="radio" id="exampleRadios1" name="availability" value="1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Piatto disponibile
                        </label>
                    </div>

                    <div class="form-check">
                        {{-- Input del piatto non disponibile --}}
                        <input class="form-check-input" type="radio" id="exampleRadios2" name="availability"  value="0">
                        <label class="form-check-label" for="exampleRadios2">
                            Piatto non disponibile
                        </label>
                    </div>
                </div>

                <div class="mb-4">
                    {{-- Immagine --}}
                    <label for="img" class="form-label img-label">Immagine</label>

                    @if ($food->img)
                        <div class="mb-3">
                            @if(str_contains($food->img, "https"))
                            <img src="{{ $food->img }}" alt="{{ $food->name }}">
                            @else
                            <img src="{{asset('storage/'. $food->img)}}" alt="{{ $food->name }}">
                            @endif
                            {{-- Placeholder --}}
                            {{-- <img src="https://www.cucchiaio.it/content/cucchiaio/it/ricette/2020/04/pasta-alla-zozzona/jcr:content/imagePreview.img10.jpg/1588238376193.jpg" alt=""> --}}
                        </div>
                        @endif
                        
                    <input class="form-control w-50 mb-4" type="file" id="img" name="img" accept="image/*" placeholder="Inserisci la nuova immagine'">
                </div>

                <p>I campi contrassegnati con <strong class="orange">*</strong> sono <strong>obbligatori</strong></p>

                <div class="mb-2">
                    {{-- Bottone --}}
                    <button type="submit" class="btn btn-warning">
                        Modifica
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

<style>
    .orange{
        color: #FF8400;
    }

    form{
        border-radius:20px;
        padding: 25px 15px;
        background-color: white;
        border: 2px solid #FF8400;
    }

    .img-label{
        display: block;
    }

    form img{
        width: 100%;
    }
</style>