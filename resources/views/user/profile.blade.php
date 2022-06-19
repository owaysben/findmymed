@extends('layouts.appbt')
@section('content')
    <!--Main container. Everything must be contained within a top-level container.-->
    <div class="container-fluid py-5">

        <!--First row (only row)-->
        <div class="row extra_margin ">

            <!-- First column (smaller of the two). Will appear on the left on desktop and on the top on mobile. -->
            <div class="col-md-4 col-sm-12 col-xs-12">

                <div class="card" style="md-4 sm-12 xs-12 bg-light">


                    <ul class="list-group list-group-flush">
                        <li>
                            <div class="outer-div">
                                <div class="inner-div">
                                    <div class="front">
                                        <div class="front__bkg-photo"></div>
                                        <div class="front__face-photo"></div>
                                        <div class="front__text">
                                            <h3 class="front__text-header">{{ Auth::user()->name }}</h3>


                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="social-media-wrapper">
                                            <a href="#" class="social-icon"><i class="fab fa-codepen"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="social-icon"><i class="fab fa-github-square"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="social-icon"><i class="fab fa-linkedin-square"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="social-icon"><i class="fab fa-instagram"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>

                                </div>
                        </li>
                        <li class="list-group-item">
                            <p>Tel: <span style="font-weight: 2; ">
                                    {{ Auth::user()->number ?? 'Inserez votre numéro de télephone' }}</span></p>
                        </li>
                        <li class="list-group-item">
                            <p>Email: <span style="font-weight: 2;">{{ Auth::user()->email }}</span></p>
                        </li>

                        <li class="list-group-item ">
                            <a href="#" class="btn btn-primary text-light">
                                Modifier mon profile
                            </a>
                        </li>
                    </ul>
                </div>

            </div> <!-- End Col 1 -->
            <!-- Second column - for small and extra-small screens, will use whatever # cols is available -->
            <div class="col-md-8 col-sm-* col-xs-*">
                @include('partials.flashmessages')
                <div class="card lighten-100 text-dark text-center">
                    <section class="p-3 text-center">
                        <div class="container">
                            <div class="row text-center g-4">
                                <div class="card-body">
                                    <div class="h1">
                                        <i class="bi bi-book"></i>
                                    </div>

                                    <h3 class="card-title">Activité récente</h3>
                                </div>
                                @if ($data->count() == 0 && $commandes->count() == 0)
                                    <div class="container col-md-12 my-5">
                                        <h4>Votre panier est vide pour le moment.</h4>
                                    </div>
                                @else
                                    <table
                                        class="table table-light justify-content-between align-items-center bg-white shadow">
                                        <thead class="table-dark text-light">
                                            <tr>
                                                <th scope="row">Médicaments</th>
                                                <td colspan="2">Service</td>
                                                <td>Date</td>
                                                <td>Status</td>
                                                <td>Quantité</td>
                                                <td colspan="2">Action</td>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr>
                                                    <th scope="row">{{ $item->product->name }}</th>
                                                    <td colspan="2">{{ $item->type }}</td>
                                                    <td>{{ $item->created_at->toDateString() }}</td>
                                                    <td class="fw-5">-</td>
                                                    <td>{{ $item->quantity }}</td>
                                                    <td>
                                                        <form action="/reserve/delete/{{ $item->id }}" method="GET">
                                                            @csrf
                                                            <button type="submit"
                                                                class="btn btn-primary btn-md justify-content-md-end">
                                                                <i class="bi bi-x-circle"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @foreach ($commandes as $commande)
                                                <tr>
                                                    <th scope="row">{{ $commande->product->name }}</th>
                                                    <td colspan="2">{{ $commande->type }}</td>
                                                    <td>{{ $commande->updated_at->toDateString() }}</td>
                                                    <td class="fw-5">{{ $commande->status }}</td>
                                                    <td>{{ $commande->quantity }}</td>
                                                    <td>
                                                        <form action="/commande/delete/{{ $commande->id }}" method="GET">
                                                            @csrf
                                                            <button class="btn btn-primary btn-md justify-content-md-end"
                                                                type="submit">
                                                                <i class="bi bi-x-circle"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                    </section>


                </div>
                <div class="card lighten-100 text-dark text-center">
                    <div class="p-4 align-items-center">

                        <button class="btn btn-success btn-md text-light">
                            Signaler un problème
                        </button>


                    </div>

                    </section>


                </div> <!-- End column 2 -->

            </div> <!-- End row 1 -->

        </div> <!-- End main container -->
    @endsection
