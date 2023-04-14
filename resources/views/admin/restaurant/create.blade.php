@extends('layouts.admin')

@section('content')
<div class="container mt-4">
<div class="row">

    <div class="col">

    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            {{-- Nome ristorante --}}
            <label for="name">Nome Ristorante</label>
            <input 
            id="name"
            type="text"
            placeholder="Nome ristorante"
            name="name"
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
            required
            > 
        </div>  

        <div>
            {{-- P.IVA --}}
            <label for="piva">P. IVA</label>
            <input 
            id="piva"
            type="text"
            placeholder="P. IVA"
            name="piva"
            size="11"
            required
        >
        </div>
        

        <div>
            {{-- Descrizione --}}
            <label for="descrizione">Descrizione</label>
            <textarea 
            name="descrizione" 
            id="descrizione" 
            cols="30" 
            rows="10" 
            placeholder="Inserisci una descrizione del ristorante"></textarea>
        </div>

        <div>
            {{-- Telefono --}}
            <label for="telefono">Numero di telefono</label>
            <input 
            id="telefono"
            type="tel"
            placeholder="Numero di telefono"
            name="telefono"
            minlength="10"
            maxlength="15"
            required
            >
        </div>

        <div>
            {{-- Categoria --}}
            <label for="categoria">Scegli la categoria del ristorante</label>
            <select name="categoria" id="categoria">
                <option value="">Italiano</option>
                <option value="">Cinese</option>
                <option value="">Internazionale</option>
                <option value="">Giapponese</option>
                <option value="">Messicano</option>
                <option value="">Indiano</option>
                <option value="">Pesce</option>
                <option value="">Carne</option>
                <option value="">Pizza</option>
                <option value="">Thailandese</option>
            </select>
        </div>

        <div>

            {{-- Immagine --}}
            <label for="image" class="form-label">Immagine</label>
            <input
            class="form-control"
            type="file" 
            name="image" 
            id="image"
            placeholder="Inserisci l'immagine'">

        </div>

    </form>
</div>

</div>
</div>
@endsection