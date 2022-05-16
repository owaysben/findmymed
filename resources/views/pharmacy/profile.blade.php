@extends('layouts.appbt')
@section('content')
    @include('layouts.header')
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
        <div class="container">
            <a href="{{ route('house') }}" class="navbar-brand"> Find My Med</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="#navmenu">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a href="#modify" class="nav-link" data-bs-toggle="modal" data-bs-target="#modify">Modifier
                            le profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="#notifs" class="nav-link" data-bs-toggle="modal"
                            data-bs-target="#notifs">Notifications <span class="badge bg-secondary">4</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#Logout" class="nav-link" data-bs-toggle="modal" data-bs-target="#logout">
                            Deconnecter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Main container. Everything must be contained within a top-level container.-->
    <div class="container-fluid">

        <!--First row (only row)-->
        <div class="row extra_margin ">

            <!-- First column (smaller of the two). Will appear on the left on desktop and on the top on mobile. -->
            <div class="col-md-4 col-sm-12 col-xs-12">

                <div class="card" style="md-4 sm-12 xs-12 bg-primary">

                    <!-- <img src="https://via.placeholder.com/100/" class="card-img-top img-thumbnail" alt="#profilepic"> -->
                    <div class="card-body">
                        <h5 class="card-title">#UserName</h5>

                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>Tel: <span style="font-weight: 2; "> +213 541610841 </span></p>
                        </li>
                        <li class="list-group-item">
                            <p>Email: <span style="font-weight: 2;">pharma@gmail.com</span></p>
                        </li>
                        <li class="list-group-item">
                            <button class="btn btn-sm"><a href="#" class="LinkedIn"><i
                                        class="bi bi-linkedin"></i></a></button>
                            <button class="btn btn-sm"><a href="#" class="Facebook"><i
                                        class="bi bi-facebook"></i></a></button>
                            <button class="btn btn-sm"><a href="#" class="Instagram"><i
                                        class="bi bi-instagram"></i></a></button>

                        </li>
                    </ul>
                    <div class="card-body">
                        <button class="btn btn-primary btn-md text-light"><a href="#" class="card-link text-light">Voir
                                ma pharmacie</a></button>
                        <!-- <a href="#" class="card-link">another link</a>-->
                    </div>
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
                <section>
                    <div class="card text-center md-10 ">

                        <div class="card-body">
                            <h5 class="card-title">Voir mon stock</h5>
                            <p class="card-text">Vous pouvez mettre à jour votre stock à tout moment.</p>
                            <a href="#" class="btn btn-primary">Consulter</a>
                        </div>
                        <div class="card-footer text-muted">
                            Consulté il ya 2h
                        </div>
                    </div>
                </section>

            </div> <!-- End column 2 -->

        </div> <!-- End row 1 -->

    </div> <!-- End main container -->
    @include('layouts.footer')
@endsection
