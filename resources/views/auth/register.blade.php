@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header text-center">
                    <h4 class="orange-color">
                        {{ __('Registrazione utente') }}
                    </h4> 
                </div>

                <div class="card-body d-flex justify-content-center">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- Nome --}}
                        <div class="mb-4 row">
                            <label for="name" class="col-form-label text-md-right">
                                {{ __('Nome') }} <strong class="orange-color">*</strong>
                            </label>

                            <div class="col">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="mb-4 row">
                            <label for="email" class="col-form-label text-md-right">
                                {{ __('E-Mail Address') }} <strong class="orange-color">*</strong>
                            </label>

                            <div class="col">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Password --}}
                        <div class="mb-4 row">
                            <label for="password" class="col-form-label text-md-right">
                                {{ __('Password') }} <strong class="orange-color">*</strong>
                            </label>

                            <div class="col">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Conferma password --}}
                        <div class="mb-4 row">
                            <label for="password-confirm" class="col-form-label text-md-right">
                                {{ __('Conferma Password') }} <strong class="orange-color">*</strong>
                            </label>

                            <div class="col">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div>
                            <p>I campi contrassegnati con <strong class="orange-color">*</strong> sono <strong>obbligatori</strong></p>
                        </div>

                        {{-- Bottone --}}
                        <div class="mt-2 row mb-0">
                            <div class="col offset-md-4">
                                <button type="submit" class="btn btn-primary register-button">
                                    {{ __('Registrati') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style scoped>

.register-button{
    background-color: #FF8400 !important;
    border: none !important;
}
.orange-color{
    color: #FF8400;
}

</style>
