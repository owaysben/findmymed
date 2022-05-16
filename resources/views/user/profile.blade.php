@extends('layouts.appbt')
@section('content')
    <!--Main container. Everything must be contained within a top-level container.-->
    <div class="container-fluid py-5">

        <!--First row (only row)-->
        <div class="row extra_margin ">

            <!-- First column (smaller of the two). Will appear on the left on desktop and on the top on mobile. -->
            <div class="col-md-4 col-sm-12 col-xs-12">

                <div class="card" style="md-4 sm-12 xs-12 bg-primary">

                    <div class="card-body">
                        <h5 class="card-title">#UserName</h5>

                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>Tel: <span style="font-weight: 2; "> +213 541610841 </span></p>
                        </li>
                        <li class="list-group-item">
                            <p>Email: <span style="font-weight: 2;">user@gmail.com</span></p>
                        </li>
                        <li class="list-group-item ">
                            <a href="#" class="btn btn-success text-light">
                                Modifier mon profile
                            </a>
                        </li>
                    </ul>
                </div>

            </div> <!-- End Col 1 -->
            <!-- Second column - for small and extra-small screens, will use whatever # cols is available -->
            <div class="col-md-8 col-sm-* col-xs-*">

                <div class="container">
                    <div class="alert alert-primary" role="alert">
                        Bienvenue #UserName vous avez 04 nouvelles notifications .
                        <a href="#" class="alert-link">Cliquez ici</a>
                        pour les voir.
                    </div>
                </div>
                <section class="p-5 text-center">
                    <div class="container">
                        <div class="row text-center g-4">
                            <!--first card-->
                            <div class="col-md">
                                <div class="card bg-light text-dark">
                                    <div class="card-body text-center">
                                        <div class="h1">
                                            <i class="bi bi-card-checklist"></i>
                                        </div>
                                        <h3 class="card-title mb-3">Voir les reservations</h3>
                                        <a href="#" class="btn btn-primary">En savoir plus</a>
                                    </div>
                                </div>
                            </div>

                            <!--second card-->
                            <div class="col-md">
                                <div class="card bg-light text-dark">
                                    <div class="card-body text-center">
                                        <div class="h1">
                                            <i class="bi bi-sliders"></i>
                                        </div>
                                        <h3 class="card-title mb-3">Gerer les commandes</h3>
                                        <a href="#" class="btn btn-primary">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div> <!-- End column 2 -->

        </div> <!-- End row 1 -->

    </div> <!-- End main container -->
@endsection
