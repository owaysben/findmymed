@extends('layouts.appbt')
@section('content')
    <section>
        <section class="bg-primary text-light p-5">
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-center">

                    <a href="/pharmacy/stock/create" class="btn btn-success">
                        Ajouter un médicament
                    </a>
                    @include('partials.flashmessages')
                </div>
            </div>
        </section>
        <div class="pt-0 ">
            <!--second card-->
            <div class="col-md mb-500 mt-5">
                <div class="card bg-light text-dark">
                    <div class="card-body text-center">
                        <div class="h1">
                            <i class="bi bi-stack"></i>
                        </div>
                        <h3 class="card-title mb-3">Mon stock</h3>
                        <table class="table pt-12 table-light justify-content-between align-items-center table-hover ">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="row">ID medicament</th>
                                    <th colspan="2">Nom médicament</th>
                                    <th>Prix</th>
                                    <th>Quantité</th>
                                    <th colspan="2">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($quantities as $quantity)
                                    <tr>
                                        <th scope="row">{{ $quantity->product->id }}</th>
                                        <td colspan="2">{{ $quantity->product->name }}</td>
                                        <td>{{ $quantity->product->price }}</td>
                                        <td class="fw-5">{{ $quantity->quantity }}</td>
                                        <td class="d-flex justify-content-md-center">

                                            <a href="/pharmacy/stock/edit/{{ $quantity->product->id }}"
                                                class="btn btn-md justify-content-md-end">
                                                <i class="bi bi-pen"></i>
                                            </a>
                                            <form action="/pharmacy/stock/delete/{{ $quantity->id }}" method="get"
                                                class="justify-content-md-end m-0">
                                                @csrf
                                                <button class="btn btn-md justify-content-md-end" type="submit">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
