@extends('layouts.appbt')
@section('content')
    <section>
        <section class="bg-primary text-light p-5">
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-center">

                    <!--<div class="input-group news-input">
                                                                                                      <input type="text" class="form-control" placeholder="Entrez le nom d'un medicament">
                                                                                                      <button class="btn btn-dark btn-lg" type="button">Rechercher</button>
                                                                                                    </div>-->
                    <a href="/pharmacy/stock/create" class="btn btn-success">
                        Ajouter un médicament
                    </a>
                    @include('partials.flashmessages')
                    {{-- <button class="btn btn-light btn-large" data-bs-toggle="modal" data-bs-target="#ajouterMed">
                        Ajouter un médicament
                    </button> --}}
                    <!--Modal-->
                    {{-- <div class="modal text-dark" id="ajouterMed" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Ajouter un nouveau médicament à votre stock</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- <p class="lead">Veuillez remplir les champs suivants</p>-->
                                    <form>
                                        <div class="mb-3">
                                            <label for="prenom" class="col-form-label">
                                                Nom du médicament:
                                            </label>
                                            <input type="text" name="prenom" class="form-control" id="prenom">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nom" class="col-form-label">
                                                ID du médicament:
                                            </label>
                                            <input type="text" name="Nom" class="form-control" id="Nom">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="col-form-label">
                                                Prix:
                                            </label>
                                            <input type="text" name="email" class="form-control" id="email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="tel" class="col-form-label">
                                                Quantité:
                                            </label>
                                            <input type="text" name="tel" class="form-control" id="tel">
                                        </div>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-primary">Envoyer</button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <div class="pt-0 ">
            <!--second card-->
            <div class="col-md mb-500">
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
                                        <td>

                                            <a href="/pharmacy/stock/edit/{{ $quantity->product->id }}"
                                                class="btn btn-md justify-content-md-end">
                                                <i class="bi bi-pen"></i>
                                            </a>
                                            <form action="/pharmacy/stock/delete/{{ $quantity->product->id }}"
                                                method="post" class="justify-content-md-end m-0">
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
