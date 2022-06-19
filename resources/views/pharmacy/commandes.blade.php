@extends('layouts.appbt')
@section('content')
    <section>
        <section class="bg-primary text-light p-5">
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-center">
                    <h3 class="mb-3">Récemment commandés</h3>
                </div>
            </div>
        </section>
        @if ($commandes->count() > 0)
            <table class="table table-light justify-content-between align-items-center">
                <thead>
                    <tr>
                        <th scope="row">ID medicament</th>
                        <td colspan="2" class="table-active">Clients potentiels</td>
                        <td>Date de la commande</td>
                        <td>Temps de la commande</td>
                        <td>Quantité commandée</td>
                        <td colspan="2">
                            Ma décision
                        </td>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($commandes as $item)
                        <tr>
                            <th scope="row">3{{ $item->product->name }}</th>
                            <td colspan="2" class="table-active">{{ $item->user->name }}</td>
                            <td>{{ $item->created_at->toDateString() }}</td>
                            {{-- <td class="fw-5">23:30</td> --}}
                            <td>{{ $item->quantity }}</td>
                            <td>
                                <form action="/pharmacy/commande/accepte/{{ $item->id }}" method="get">
                                    <button class="btn btn-primary btn-md justify-content-md-end" type="submit">
                                        <i class="bi bi-check-circle"></i>
                                    </button>
                                </form>
                                <form action="/pharmacy/commande/refuse/{{ $item->id }}" method="get">
                                    <button class="btn btn-primary btn-md justify-content-md-end" type="submit">
                                        <i class="bi bi-x-circle"></i>
                                    </button>
                                </form>
                            </td>
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
