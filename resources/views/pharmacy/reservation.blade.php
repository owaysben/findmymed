@extends('layouts.appbt')
@section('content')
    <section>
        <section class="bg-primary text-light p-5">
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-center">
                    <h3 class="mb-3">Recemment reservés:</h3>
                </div>
            </div>
        </section>
        @if ($reservations->count() > 0)
            <table class="table table-light justify-content-between align-items-center">
                <thead>
                    <tr>
                        <th scope="row">Medicaments</th>
                        <th colspan="2" class="table-active">Clients potentiels</th>
                        <th>Date de reservation</th>
                        {{-- <th>Temps de reservation</th> --}}
                        <th>Quantité réservé</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($reservations as $item)
                        <tr>
                            <th scope="row">{{ $item->product->name }}</th>
                            <td colspan="2" class="table-active">{{ $item->user->name }}</td>
                            <td>{{ $item->created_at->toDateString() }}</td>
                            {{-- <td class="fw-5">23:30</td> --}}
                            <td>{{ $item->quantity }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="container col-md-12 my-5 ">
                <h4>Votre panier est vide pour le moment.</h4>
            </div>
        @endif
    </section>
@endsection
