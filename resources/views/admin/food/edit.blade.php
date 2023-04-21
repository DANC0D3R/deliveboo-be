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
                    value="{{ old('name', $food->name) }}"
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
                    placeholder="Inserisci gli ingredienti del piatto">{{ old('description', $food->description) }}</textarea>
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
                    value="{{ old('price', $food->price) }}"
                    required
                    >
                    @error('price')
                        <div class="alert alert-danger">Inserisci almeno una cifra non negativa</div>
                    @enderror
                </div>

                {{-- Tipologie di piatto --}}
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" value="1" name="vegetarian">
                    <label class="btn btn-outline-primary" for="btncheck1">Vegetariano</label>
                  
                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off" value="1" name="vegan">
                    <label class="btn btn-outline-primary" for="btncheck2">Vegano</label>
                  
                    <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off" value="1" name="glutenfree">
                    <label class="btn btn-outline-primary" for="btncheck3">Gluten Free</label>
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

                    @if(str_contains($food->img, "https"))
                        <img src="{{ $food->img }}" style="height: 300px" alt="{{ $food->name }}">
                        @else
                        <img   src="{{asset('storage/'. $food->img)}}" style="height: 300px" alt="{{ $food->name }}">
                    @endif

                    <input class="form-control w-50 mb-4" type="file" id="img" name="img" accept="image/*" placeholder="Inserisci la nuova immagine'">
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