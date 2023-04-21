@extends('layouts.admin')

@section('content')
    <div class="container form mt-4">
        <div class="row">

            <div class="col">

                <form action="{{ route('admin.restaurants.update', $restaurant->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')


                    @include('partials.error')

                    <div>
                        <h2 class="mb-3">Modifica il tuo ristorante</h2>

                        {{-- Nome ristorante --}}
                        <label for="name" class="form-laber @error('name') text-danger @enderror">Nome Ristorante *</label>
                        <input
                        class="d-block mb-2 form-control" 
                        id="name"
                        type="text"
                        placeholder="Scrivi qui..."
                        name="name"
                        value="{{ old('name', $restaurant->name) }}"
                        maxlength="50"
                        required
                        >
                        @error('name')
                            <div class="alert alert-danger">Inserisci almeno un carattere</div>
                        @enderror
                    </div>

                    <div>
                        {{-- Indirizzo --}}
                        <label for="address" class="form-label @error('address') text-danger @enderror">Indirizzo *</label>
                        <input 
                        class="d-block mb-2 form-control"
                        id="address"
                        type="text"
                        placeholder="Es: Via Marco Polo 12"
                        name="address"
                        value="{{ old('address', $restaurant->address) }}"
                        minlength="5"
                        maxlength="100"
                        required
                        >
                        @error('address')
                            <div class="alert alert-danger">Inserisci almeno 5 caratteri</div>
                        @enderror
                    </div>  

                    <div>
                        {{-- P.IVA --}}
                        <label for="p_iva" class="form-label @error('p_iva') text-danger @enderror">P. IVA *</label>
                        <input 
                        class="d-block mb-2 form-control"
                        id="p_iva"
                        type="text"
                        placeholder="Es: IT123..."
                        name="p_iva"
                        value="{{ old('p_iva', $restaurant->p_iva) }}"
                        maxlength="11"
                        pattern="{11}"
                        required
                        >
                        @error('p_iva')
                            <div class="alert alert-danger">Inserisci 11 cartteri ( 2 di sigla di Stato + 9 numeri)</div>
                        @enderror
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
                            placeholder="Inserisci una descrizione del ristorante">{{ old('description', $restaurant->description) }}
                        </textarea>
                    </div>

                    <div>
                        {{-- Telefono --}}
                        <label for="phone" class="form-label @error('name') text-danger @enderror">Numero di telefono *</label>
                        <input 
                        class="d-block mb-2 form-control"
                        id="phone"
                        type="tel"
                        placeholder="Es: +39 340..."
                        name="phone"
                        value="{{ old('phone', $restaurant->phone) }}"
                        minlength="10"
                        maxlength="15"
                        required
                        >
                        @error('phone')
                            <div class="alert alert-danger">Inserisci almeno 10 caratteri</div>
                        @enderror
                    </div>

                    {{-- Tipo --}}

                    <p class="mb-1">Tipo di ristorante *</p>
                    @foreach ($types as $type)
                        <div class="btn-group click" role="group" aria-label="Basic checkbox toggle button group">
                            {{-- <input
                            class="btn-check"
                            name="types[]"
                            type="checkbox"
                            id="type-{{ $type->id }}"
                            {{ in_array($type->id, old('types', [])) ? 'checked' : '' }}
                            value="{{ $type->id }}"
                            > --}}
                            <input class="btn-check" type="checkbox" name="types[]" id="type-{{ $type->id }}" value="{{ $type->id }}"
                                @if (old('types') && is_array(old('types')) && count(old('types')) > 0)
                                    {{ in_array($type->id, old('types')) ? 'checked' : '' }}
                                @elseif($restaurant->types->contains($type))
                                    checked
                                @endif
                            >
                            <label class="btn btn-outline-warning" for="type-{{ $type->id }}">
                                {{ $type->name }}
                            </label>
                        </div>
                    @endforeach

                    <div>
                        {{-- Immagine --}}
                        <label for="img" class="form-label">Immagine</label>
    
                        @if(str_contains($restaurant->img, "https"))
                            <img src="{{ $restaurant->img }}" style="height: 300px" alt="{{ $restaurant->name }}">
                            @else
                            <img   src="{{asset('storage/'. $restaurant->img)}}" style="height: 300px" alt="{{ $restaurant->name }}">
                        @endif
    
                        <input class="form-control w-50 mb-4" type="file" id="img" name="img" accept="image/*" placeholder="Inserisci la nuova immagine'">
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