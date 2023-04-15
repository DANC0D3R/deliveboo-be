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
</div>
@endsection