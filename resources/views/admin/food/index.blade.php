@extends('layouts.admin')

@section('content')
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
                            <h2 class="card-title">{{ $food->name }}</h2>

                            <a href="{{ route('admin.foods.show', $food) }}" class="btn btn-primary">
                                Vedi dettagli
                            </a>
                            <a href="{{ route('admin.foods.edit', $food) }}" class="btn btn-warning">
                                Aggiorna
                            </a>
                            <form action="{{route('admin.foods.destroy',$food->id)}}" method="POST" enctype="multipart/form-data" onsubmit="return confirm('Sei sicuro di voler eliminare questo piatto?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"class="btn btn-danger">
                                    Elimina
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</div>
@endsection