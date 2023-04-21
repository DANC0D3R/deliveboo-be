@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">

    {{-- Utente già regostrato --}}
    @if(count($restaurant)>0)
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="restaurant-card mt-4 shadow">
                <h2 class="mb-3">
                    {{ $restaurant[0]->name }}
                </h2>

                <p class="mb-1">
                    <i class="fa-solid fa-location-dot"></i>
                    {{ $restaurant[0]->address }}
                </p>

                <p>
                    {{ $restaurant[0]->description }}
                </p>

                <a href="{{ route('admin.restaurants.show', $restaurant[0]) }}" class="btn details">
                    Dettagli
                </a>
            </div>

        </div>
    </div>

    {{-- Nuovo utente --}}
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
    background-color: #FF8400 !important;
}
.details{
    background-color: #FF8400 !important;
    color: white !important;
}

.restaurant-card{
    border-radius:20px;
    padding: 25px 15px;
    background-color: #FFF2CC;
}
   
</style>