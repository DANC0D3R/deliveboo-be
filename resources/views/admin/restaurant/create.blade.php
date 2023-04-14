@extends('layouts.admin')

@section('content')
<div class="container mt-4">
<div class="row">

    <div class="col">

    <form action="{{ route('admin.restaurants.store') }}" method="POST" enctype="multipart/form-data">
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
            <h2 class="mb-3">Inserisci il tuo ristorante</h2>

            {{-- Nome ristorante --}}
            <label for="name" class="form-laber">Nome Ristorante *</label>
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
        </div>

        <div>
            {{-- Indirizzo --}}
            <label for="address" class="form-label">Indirizzo *</label>
            <input 
            class="d-block mb-2 form-control"
            id="address"
            type="text"
            placeholder="Es: Via Marco Polo 12"
            name="address"
            value="{{ old('address') }}"
            minlength="5"
            maxlength="100"
            required
            > 
        </div>  

        <div>
            {{-- P.IVA --}}
            <label for="p_iva" class="form-label">P. IVA *</label>
            <input 
            class="d-block mb-2 form-control"
            id="p_iva"
            type="text"
            placeholder="Es: IT123..."
            name="p_iva"
            value="{{ old('p_iva') }}"
            size="11"
            required
        >
        </div>
        

        <div>
            {{-- Descrizione --}}
            <label for="description" form="form-label">Descrizione</label>
            <textarea 
            class="d-block mb-2 form-control"
            name="description" 
            id="description" 
            cols="50" 
            rows="5" 
            placeholder="Inserisci una descrizione del ristorante">{{ old('description') }}</textarea>
        </div>

        <div>
            {{-- Telefono --}}
            <label for="phone" class="form-label">Numero di telefono *</label>
            <input 
            class="d-block mb-2 form-control"
            id="phone"
            type="tel"
            placeholder="Es: +39 340..."
            name="phone"
            value="{{ old('phone') }}"
            minlength="10"
            maxlength="15"
            required
            >
        </div>

        <div>
            {{-- Tipo --}}
            <label class="d-block mb-2" for="type" class="form-label">Scegli la categoria del ristorante</label>
            <select class="d-block mb-2 form-select" name="type" id="type">
                <option value="italiano">Italiano</option>
                <option value="cinese">Cinese</option>
                <option value="internazionale">Internazionale</option>
                <option value="giapponese">Giapponese</option>
                <option value="messicano">Messicano</option>
                <option value="indiano">Indiano</option>
                <option value="pesce">Pesce</option>
                <option value="carne">Carne</option>
                <option value="pizza">Pizza</option>
                <option value="thailandese">Thailandese</option>
            </select>
        </div>

        <div>

            {{-- Immagine --}}
            <label for="img" class="form-label">Immagine</label>
            <input
            class="form-control w-50 mb-4"
            type="file" 
            name="img" 
            id="img"
            placeholder="Inserisci l'immagine'">

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