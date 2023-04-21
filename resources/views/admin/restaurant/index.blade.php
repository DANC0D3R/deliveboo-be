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

                    {{-- Pulsante di show del ristorante --}}
                    <a href="{{ route('admin.restaurants.show', $restaurant[0]) }}" class="btn btn-primary mb-2">
                        Dettagli
                    </a>

                    {{-- Pulsante di modifica ristorante --}}
                    <a href="{{ route('admin.restaurants.edit', $restaurant[0]) }}" class="btn btn-warning mb-2">
                        Modifica
                    </a>

                    

            </div>
        </div>
    </div>
    @else
    <div class="home-jumbotron py-5">

            <div class="container rounded-4 p-5 presentation-banner text-center shadow welcome-container">
                <h1 class="custom-color">Benvenuto {{ Auth::user()->name }}</h1>



                <h2 class="py-3">DeliveBoo,la piattaforma che ti permette di gestire il tuo ristorante</h2>
                <h3 class="py-3">
                    Con un click
                </h3>
                <a href="{{ route('admin.restaurants.create') }}" class="btn btn-success">
                        Inserisci il tuo ristorante
                </a>
            </div>

           
            

        </div>
    
    @endif
</div>
@endsection
<style scoped>
.container{
    background-color: #FF8400;
}

   
</style>