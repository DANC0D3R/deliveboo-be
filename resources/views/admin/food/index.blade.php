@extends('layouts.admin')

@section('content')
@include('partials.success')

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menù') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{-- Pulsante create --}}
                    <a href="{{ route('admin.foods.create') }}" class="btn btn-success">
                        Inserisci il tuo piatto
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-3">
            @foreach ($foods as $food)
                <div class="col-4 mb-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h2 class="card-title">{{ $food->name }}</h2> {{-- Nome piatto --}}
                            <h6 class="card-title">{{$food->price}}€</h6> {{-- Prezzo piatto --}}
                            <h6 class="card-title">{{$food->description}}</h6> {{-- Descrizione piatto --}}

                            
                            {{-- Pulsante show --}}
                            <a href="{{ route('admin.foods.show', $food->id) }}" class="btn btn-primary"> 
                                Vedi dettagli
                            </a>
                            {{-- Pulsante sedit --}}
                            <a href="{{ route('admin.foods.edit', $food->id) }}" class="btn btn-warning">
                                Aggiorna
                            </a>
                            
                            {{-- eliminazione tramite modale --}}
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal_{{ $food->id }}">Elimina</button>

                            <div class="modal fade" id="deleteModal_{{ $food->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Elimminazione piatto</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Confermi di voler eliminare {{ $food->title }}?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                        <form action="{{ route('admin.foods.destroy', $food->id) }}" method="POST" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            @csrf
                                            @method('DELETE')
        
                                            {{-- Pulsante delete --}}
                                            <button class="btn btn-danger">Elimina</button>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</div>
@endsection