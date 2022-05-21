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
                        <li class="list-group-item">
                            <p>Pharmacie: <span style="font-weight: 2;">#NomPharmacie</span></p>
                        </li>
                        <li class="list-group-item">
                            <p>Adresse: <span style="font-weight: 2;">AdressePharmacie</span></p>
                        </li>
                        <li class="list-group-item">
                            <p>Localisation <span style="font-weight: 2;">X/Y</span></p>
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


                <div class="card lighten-100 text-dark text-center">
                <section class="p-5 text-center">
                    <div class="container">
                        <div class="row text-center g-4">

                            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="\images\ph5-com.jpg" class="d-block w-100" alt="imgCom"
                                        style="max-height: 25%; max-width:25%;">
                                    <div class="carousel-caption d-none d-md-block">

                                        <div class="h1">
                                            <i class="bi bi-card-checklist"></i>
                                        </div>
                                        <h5>Voir les réservations</h5>
                                         <p>Suivez les réservations faites par vos clients potentiels.</p>
                                         <a href="#" class="btn btn-primary">Consulter</a>
                                     </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="\images\ph4-reserv.jpg" class="d-block w-100" alt="imgReserv"
                                    style="max-height: 25%; max-width:25%;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="h1">
                                            <i class="bi bi-sliders"></i>
                                        </div>
                                        <h5>Gérer les commandes</h5>
                                        <p>Consultez les commandes de vos clients.</p>
                                        <a href="#" class="btn btn-primary">Consulter</a>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        </div>
                    </div>
                </section>
                <section>
                <div>
                    <div class="card text-center md-10">

                        <div class="card-body">
                            <h5 class="card-title">Voir mon stock</h5>
                            <p class="card-text">Vous pouvez mettre à jour votre stock à tout moment.</p>
                            <a href="#" class="btn btn-primary">Consulter</a>
                        </div>

                    </div>
                </div>
                </section>
                </div>

            </div> <!-- End column 2 -->

        </div> <!-- End row 1 -->

    </div> <!-- End main container -->
@endsection
