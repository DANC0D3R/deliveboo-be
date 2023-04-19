@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    @if(count($restaurant)>0)
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                    <h1>
                        {{ $restaurant[0]->name }}
                    </h1>

                    <p>
                        {{ $restaurant[0]->address }}
                    </p>

                    <p>
                        {{ $restaurant[0]->description }}
                    </p>

                    {{-- <div>
                        <a href="{{ route('admin.restaurant.show', $restaurant->id) }}" class="crud-button show"> 
                            <i class="fa-solid fa-eye"></i>
                        </a>
                     </div> --}}

                    {{-- <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.restaurant.index' ? 'bg-secondary' : '' }}" href="{{route('admin.restaurants.index')}}">
                        <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Il tuo ristorante
                    </a>  --}}

                    <a href="{{ route('admin.restaurants.show', $restaurant[0]) }}" class="btn btn-primary mb-2">
                        Dettagli
                    </a>

                    

            </div>
        </div>
    </div>
    @else
    <a href="{{ route('admin.restaurants.create') }}" class="btn btn-success">
        Inserisci il tuo ristorante
    </a>
    @endif
</div>
@endsection