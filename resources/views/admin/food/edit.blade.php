@extends('layouts.admin')

@section('content')
<div class="container mt-4">
<div class="row">

    <div class="col">

    <form action="{{ route('admin.foods.update', $food->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

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

            {{-- Immagine --}}
            {{-- <label for="img" class="form-label">Immagine</label>
            <input
            class="form-control w-50 mb-4"
            type="file" 
            name="img" 
            id="img"
            placeholder="Inserisci l'immagine'"> --}}

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
            <button type="submit" class="btn btn-success">
                Inserisci
            </button>
        </div>

    </form>

    
</div>

</div>
</div>
@endsection