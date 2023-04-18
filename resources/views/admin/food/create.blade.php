@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="row">

        <div class="col">

            <form action="{{ route('admin.foods.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    @if($errors->any())
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>

                <div>
                    <h2 class="mb-3">Inserisci il tuo piatto</h2>

                    {{-- Salvataggio Id ristorante dello user loggato --}}
                    <div class="d-none">
                        <input type="number" name="restaurant_id" value="{{ $targetRestaurant[0]->id }}">
                    </div>

                    {{-- Nome piatto --}}
                    <label for="name" class="form-laber @error('name') text-danger @enderror">Nome Piatto *</label>
                    <input
                    class="d-block mb-2 form-control" 
                    id="name"
                    type="text"
                    placeholder="Scrivi qui..."
                    name="name"
                    value="{{ old('name') }}"
                    maxlength="50"
                    required
                    >
                    @error('name')
                        <div class="alert alert-danger">Inserisci almeno un carattere</div>
                    @enderror
                </div>    

                <div>
                    {{-- Descrizione / Ingredienti --}}
                    <label for="description" form="form-label" class="@error('description') text-danger @enderror">Ingredienti *</label>
                    <textarea 
                    class="d-block mb-2 form-control"
                    name="description" 
                    id="description" 
                    cols="50" 
                    rows="5"
                    required 
                    placeholder="Inserisci gli ingredienti del piatto">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="alert alert-danger">Inserisci almeno un ingrediente</div>
                    @enderror
                </div>

                <div>
                    {{-- Prezzo --}}
                    <label for="price" class="form-label" class="@error('price') text-danger @enderror">Prezzo €*</label>
                    <input 
                    class="d-block mb-2 form-control"
                    id="price"
                    type="number"
                    placeholder="Es: 9.99"
                    name="price"
                    step="0.01"
                    min="0.00"
                    value="{{ old('price') }}"
                    required
                    >
                    @error('price')
                        <div class="alert alert-danger">Inserisci almeno una cifra non negativa</div>
                    @enderror
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

                {{-- Disponibilità del piatto --}}
                <div>
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
                    <input
                    class="form-control w-50 mb-4"
                    type="file" 
                    name="img" 
                    id="img"
                    placeholder="Inserisci l'immagine'"
                    >
                </div>

                <p>I campi contrassegnati con <strong>*</strong> sono <strong>obbligatori</strong></p>

                <div>
                    {{-- Bottone --}}
                    <button type="submit" class="m-3 btn btn-success">
                        Inserisci
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection