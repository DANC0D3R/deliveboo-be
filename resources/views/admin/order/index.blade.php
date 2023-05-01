@extends('layouts.admin')

@section('content')
    <h1 class="text-center my-3">I tuoi ordini</h1>

    <div class="my-table-bg shadow">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id ordine</th>
                    <th scope="col">Incasso</th>
                    <th scope="col">Utente</th>
                    <th scope="col">Indirizzo</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ricezione ordine</th>
                    <th scope="col">Note</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order as $singleOrder)
                    <tr>
                        <th scope="row">{{ $singleOrder->id }}</th>
                        <td>{{ $singleOrder->total_price }} €</td>
                        <td>{{ $singleOrder->client_name }} {{ $singleOrder->client_surname }}</td>
                        <td>{{ $singleOrder->client_address }}</td>
                        <td>{{ $singleOrder->client_phone }}</td>
                        <td>{{ $singleOrder->client_email }}</td>
                        <td>{{ $singleOrder->created_at }}</td>
                        <td>{{ $singleOrder->notes }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

<style scoped>
    .my-table-bg {
        padding: 25px 15px;
        background-color: white;
        border: 2px solid #FF8400;
        border-radius:20px;
    }
</style>