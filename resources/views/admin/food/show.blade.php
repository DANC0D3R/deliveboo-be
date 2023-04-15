@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $food->name }}</h1>
                <a href="{{ route('admin.foods.index') }}" class="btn btn-primary">
                    Torna indietro
                </a>
            </div>
        </div>
        <div class="row g-3">
            <div class="col mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <p>{{ $food->description }}</p>
                    </div>
                    <div class="card-body">
                        <p>{{ $food->price }}€</p>
                    </div>
                </div>
            </div>
        </div>
                @if ($food->img)
                    <div>
                        <img src="{{ asset('storage/'.$food->img) }}" style="height: 300px;" alt="null">
                    </div>
                @endif
    </div>
@endsection