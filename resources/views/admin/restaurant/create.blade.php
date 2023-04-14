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
            {{-- Nome ristorante --}}
            <label for="name">Nome Ristorante</label>
            <input 
            id="name"
            type="text"
            placeholder="Nome ristorante"
            name="name"
            maxlength="50"
            required
            >
        </div>

        <div>
            {{-- Indirizzo --}}
            <label for="address">Indirizzo</label>
            <input 
            id="address"
            type="text"
            placeholder="Indirizzo"
            name="address"
            minlength="5"
            maxlength="100"
            required
            > 
        </div>  

        <div>
            {{-- P.IVA --}}
            <label for="p_iva">P. IVA</label>
            <input 
            id="p_iva"
            type="text"
            placeholder="P. IVA"
            name="p_iva"
            size="11"
            required
        >
        </div>
        

        <div>
            {{-- Descrizione --}}
            <label for="description">Descrizione</label>
            <textarea 
            name="description" 
            id="description" 
            cols="30" 
            rows="10" 
            placeholder="Inserisci una descrizione del ristorante"></textarea>
        </div>

        <div>
            {{-- Telefono --}}
            <label for="phone">Numero di telefono</label>
            <input 
            id="phone"
            type="tel"
            placeholder="Numero di telefono"
            name="phone"
            minlength="10"
            maxlength="15"
            required
            >
        </div>

        <div>
            {{-- Tipo --}}
            <label for="type">Scegli la categoria del ristorante</label>
            <select name="type" id="type">
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
            class="form-control"
            type="file" 
            name="img" 
            id="img"
            placeholder="Inserisci l'immagine'">

        </div>

        <div>
            {{-- Bottone --}}
            <button type="submit" class="mb-5 btn btn-success">
                Crea
            </button>
        </div>

    </form>

    
</div>

</div>
</div>
@endsection