@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">

    <div class="row">
    <form action="#" method="POST" enctype="multipart/form-data" class="col">
        @csrf

        {{-- Nome ristorante --}}
        <label for="name">Nome Ristorante</label>
        <input 
        id="name"
        type="text"
        placeholder="Nome ristorante"
        name="name"
        required
        >

        {{-- Indirizzo --}}
        <label for="address">Indirizzo</label>
        <input 
        id="address"
        type="text"
        placeholder="Indirizzo"
        name="address"
        required
        >

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

        {{-- Descrizione --}}
        <label for="descrizione">Descrizione</label>
        <textarea 
        name="descrizione" 
        id="descrizione" 
        cols="30" 
        rows="10" 
        placeholder="Inserisci una descrizione del ristorante"></textarea>

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
@endsection