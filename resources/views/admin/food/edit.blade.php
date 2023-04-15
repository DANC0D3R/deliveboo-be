@extends('layouts.admin')

@section('content')
<div class="container mt-4">
<div class="row">

    <div class="col">

    <form action="{{ route('admin.foods.update', $food->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            @include('partials.error')
        </div>

        <div>
            <h2 class="mb-3">Modifica il tuo piatto</h2>

            {{-- Nome piatto --}}
            <label for="name" class="form-laber">Nome Piatto *</label>
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
        </div>    

        <div>
            {{-- Descrizione --}}
            <label for="description" form="form-label">Ingredienti *</label>
            <textarea 
            class="d-block mb-2 form-control"
            name="description" 
            id="description" 
            cols="50" 
            rows="5"
            required 
            placeholder="Inserisci gli ingredienti del piatto">{{ old('description', $food->description) }}</textarea>
        </div>

        <div>
            {{-- Prezzo --}}
            <label for="price" class="form-label">Prezzo €*</label>
            <input 
            class="d-block mb-2 form-control"
            id="price"
            type="number"
            placeholder="Es: 9.99"
            name="price"
            step="0.01"
            value="{{ old('price', $food->price) }}"
            required
            >
        </div>

        <div>
            {{-- Tipologie di piatto --}}
            <label class="form-label">Che tipo di piatto è?</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="vegetarian" value="1">
                <label class="form-check-label" for="inlineCheckbox1">Vegetariano</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="vegan" value="1">
                <label class="form-check-label" for="inlineCheckbox2">Vegano</label>
            </div>
        </div>

        <div>
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

        <div>
            {{-- Immagine --}}
            <label for="img" class="form-label">Immagine</label>

            @if ($food->img)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="delete-img" id="delete-img">
                    <label class="form-check-label" for="delete-img">
                        Elimina immagine
                    </label>
                </div>

                <img src="{{ asset('storage/'.$food->img) }}" class="card-img-top mb-3" alt="immagine" style="height: 200px; width: 300px">
            @endif

            <input class="form-control w-50 mb-4" type="file" id="img" name="img" accept="image/*" placeholder="Inserisci l'immagine'">
        </div>

        <p>I campi contrassegnati con <strong>*</strong> sono <strong>obbligatori</strong></p>

        <div>
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