
@extends('layouts.app')
@section('content')
    <div class=" ">
        <div class="home-jumbotron py-5">

            <div class="main-white container rounded-4 p-5 presentation-banner text-center shadow welcome-container">
                <h1 class="custom-color">Benvenuto sulla tua pagina personale di DeliveBoo</h1>

                <h4 class="py-3">Unisciti alla community di DeliveBoo!</h4>
                <h5 class="mb-4">
                    Insieme possiamo aiutarti a raggiungere sempre più clienti
                </h5>
                <a href="{{ route('register') }}" class="btn btn-lg btn-success btn-account btn-custom shadow-sm">
                    <h5>Crea il tuo account!</h5>
                </a>
            </div>

            @php
                $partnersList = [
                    'https://deliveroo-restaurants.cdn.prismic.io/deliveroo-restaurants%2F2cf9b4dd-1b99-4436-b115-e5442aea7131_rossopomodoro_logotype.svg', 
                    'https://deliveroo-restaurants.cdn.prismic.io/deliveroo-restaurants/b52857da-0bec-41dd-8856-caa3ee6368b0_mcdonalds.svg', 
                    'https://deliveroo-restaurants.cdn.prismic.io/deliveroo-restaurants%2Fae228138-c6c6-4872-accd-579c544200e3_logo+la+piadineria.svg', 
                    'https://deliveroo-restaurants.cdn.prismic.io/deliveroo-restaurants/2b041d22-2807-4fc5-ad86-1dcb4101386e_lielita+logo.svg', 
                    'https://deliveroo-restaurants.cdn.prismic.io/deliveroo-restaurants/7fcee47d-5519-47ce-8e82-10988d34eaa4_pokeria+logo.svg'];
            @endphp

            <div class="main-white mt-5 shadow">
                <div class="container partners d-none mt-4 p-3 d-md-block">

                    <div class="my-4">
                        <h3>Alcuni dei nostri partner</h3>
                        <h6>Unisciti a loro e inizia a consegnare in tutta la tua città</h6>
                    </div>

                    <div class="row row-cols-5">
                        @foreach ($partnersList as $img)
                            <div class="col h-100">
                                <div class="card p-3">
                                    <img src="{{ $img }}" class="card-img" alt="..." style="height: 100px">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            

        </div>
    </div>
@endsection


<style scoped>
.main-white{
    background-color: #FFF2CC;
}

   
</style>
