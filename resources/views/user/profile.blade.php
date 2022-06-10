@extends('layouts.appbt')
@section('content')
<<<<<<< Updated upstream
    <!--Main container. Everything must be contained within a top-level container.-->
    <div class="container-fluid py-6">
=======
   <!--Main container. Everything must be contained within a top-level container.-->
<div class="container-fluid py-5">
>>>>>>> Stashed changes

    <!--First row (only row)-->
    <div class="row extra_margin ">

        <!-- First column (smaller of the two). Will appear on the left on desktop and on the top on mobile. -->
        <div class="col-md-4 col-sm-12 col-xs-12">

<<<<<<< Updated upstream
                <div class="card" style="md-4 sm-12 xs-12 ">


                    <div class="card-body">
                        <h5 class="card-title">{{ Auth::user()->name }}</h5>

                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>Tel: <span style="fw-2">{{ Auth::user()->number }}</span></p>
                        </li>
                        <li class="list-group-item">
                            <p>Email: <span style="fw-2">{{ Auth::user()->email }}</span></p>
                        </li>
                    </ul>
                    <li class="list-group-item ">
                        <a href="/user/profile/edit" class="btn btn-success text-light">
                            Modifier mon profile
                        </a>
                    </li>
                </div>

            </div> <!-- End Col 1 -->
            <!-- Second column - for small and extra-small screens, will use whatever # cols is available -->
            <div class="col-md-8 col-sm-* col-xs-*">

                <div class="container">
                    <div class="alert alert-primary" role="alert">
                        Bienvenue <b>{{ Auth::user()->name }}</b> vous avez 04 nouvelles notifications .
                        <a href="#" class="alert-link">Cliquez ici</a>
                        pour les voir.
                    </div>
                </div>
                <section class="p-5 text-center">

                    <!--second card-->
                    <div class="col-md">
                        <div class="card bg-light text-dark">
                            <div class="card-body text-center">
                                <div class="h1">
                                    <i class="bi bi-book"></i>
                                </div>
                                <h3 class="card-title mb-3">Activité récente</h3>
                                <table class="table table-light justify-content-between align-items-center">
                                    <thead>
                                        <tr>
                                            <th scope="row">Médicaments</th>
                                            <th colspan="2" class="table-active">Type</th>
                                            <th>Date</th>
                                            <th>Temps</th>
                                            <th>Quantité</th>
                                            <th colspan="2">
                                                Ma décision
                                            </th>

                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2" class="table-active">Résérvation</td>
                                            <td>02/02/2020</td>
                                            <td class="fw-5">23:30</td>
                                            <td>2</td>
                                            <td>
                                                <button class="btn btn-primary btn-md justify-content-md-end">
                                                    <i class="bi bi-x-circle"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2" class="table-active">Résérvation</td>
                                            <td>02/02/2020</td>
                                            <td class="fw-5">23:30</td>
                                            <td>2</td>
                                            <td>
                                                <button class="btn btn-primary btn-md justify-content-md-end">
                                                    <i class="bi bi-x-circle"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2" class="table-active">Commande</td>
                                            <td>02/02/2020</td>
                                            <td class="fw-5">23:30</td>
                                            <td>2</td>
                                            <td>

                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2" class="table-active">Résérvation</td>
                                            <td>02/02/2020</td>
                                            <td class="fw-5">23:30</td>
                                            <td>2</td>
                                            <td>
                                                <button class="btn btn-primary btn-md justify-content-md-end">
                                                    <i class="bi bi-x-circle"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2" class="table-active">Résérvation</td>
                                            <td>02/02/2020</td>
                                            <td class="fw-5">23:30</td>
                                            <td>2</td>
                                            <td>
                                                <button class="btn btn-primary btn-md justify-content-md-end">
                                                    <i class="bi bi-x-circle"></i>
                                                </button>
                                            </td>
                                        </tr>




                                    </tbody>
                                </table>
=======
            <div class="card" style="md-4 sm-12 xs-12 bg-primary">


                <ul class="list-group list-group-flush">
                    <li>
                        <div class="outer-div">
                            <div class="inner-div">
                                <div class="front">
                                    <div class="front__bkg-photo"></div>
                                    <div class="front__face-photo"></div>
                                    <div class="front__text">
                                        <h3 class="front__text-header">Bobby Korec</h3>
                                        <p class="front__text-para"><i class="fas fa-map-marker-alt front-icons"></i>Seattle</p>

                                    </div>
                                </div>
                                <div class="back">
                                    <div class="social-media-wrapper">
                                        <a href="#" class="social-icon"><i class="fab fa-codepen" aria-hidden="true"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-github-square" aria-hidden="true"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-linkedin-square" aria-hidden="true"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>

>>>>>>> Stashed changes
                            </div>
                    </li>
                    <li class="list-group-item">
                        <p>Tel: <span style="font-weight: 2; "> +213 541610841 </span></p>
                    </li>
                    <li class="list-group-item">
                        <p>Email: <span style="font-weight: 2;">user@gmail.com</span></p>
                    </li>
                    <li class="list-group-item">
                        <p>Adresse: <span style="font-weight: 2;">AdresseClient</span></p>
                    </li>
                    <li class="list-group-item">
                        <p>Localisation: <span style="font-weight: 2;">X/Y</span></p>
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
                <section class="p-3 text-center">
                    <div class="container">
                        <div class="row text-center g-4">
                            <div class="card-body">
                            <div class="h1>">
                                <i class="bi bi-book"></i>
                            </div>

                                <h3 class="card-title">Activité récente</h3>
                            </div>
                            <table class="table table-light justify-content-between align-items-center bg-white shadow">
                                <thead class="table-dark text-light">
                                    <tr>
                                        <th scope="row">Médicaments</th>
                                        <td colspan="2">Service</td>
                                        <td>Date</td>
                                        <td>Temps</td>
                                        <td>Quantité</td>
                                        <td colspan="2">

                                        </td>

                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Résérvation</td>
                                        <td>02/02/2020</td>
                                        <td class="fw-5">23:30</td>
                                        <td>2</td>
                                        <td>
                                            <button class="btn btn-primary btn-md justify-content-md-end">
                                                <i class="bi bi-x-circle"></i>
                                            </button>
                                            <button class="btn btn-primary btn-md justify-content-md-end">

                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Commande</td>
                                        <td>02/02/2020</td>
                                        <td class="fw-5">23:30</td>
                                        <td>2</td>
                                        <td>
                                            <button class="btn btn-primary btn-md justify-content-md-end">
                                                <i class="bi bi-x-circle"></i>
                                            </button>
                                            <button class="btn btn-primary btn-md justify-content-md-end">

                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Commande</td>
                                        <td>02/02/2020</td>
                                        <td class="fw-5">23:30</td>
                                        <td>2</td>
                                        <td>
                                            <button class="btn btn-primary btn-md justify-content-md-end">
                                                <i class="bi bi-x-circle"></i>
                                            </button>
                                            <button class="btn btn-primary btn-md justify-content-md-end">

                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Résérvation</td>
                                        <td>02/02/2020</td>
                                        <td class="fw-5">23:30</td>
                                        <td>2</td>
                                        <td>
                                            <button class="btn btn-primary btn-md justify-content-md-end">
                                                <i class="bi bi-x-circle"></i>
                                            </button>
                                            <button class="btn btn-primary btn-md justify-content-md-end">

                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Résérvation</td>
                                        <td>02/02/2020</td>
                                        <td class="fw-5">23:30</td>
                                        <td>2</td>
                                        <td>
                                            <button class="btn btn-primary btn-md justify-content-md-end">
                                                <i class="bi bi-x-circle"></i>
                                            </button>
                                            <button class="btn btn-primary btn-md justify-content-md-end">

                                            </button>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
<<<<<<< Updated upstream
            </div>

        </div> <!-- End row 1 -->
        <div>
            <table class="table">
                <thead class="table-dark">

                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

    </div> <!-- End main container -->
    </div>
=======

            </div>
            <div class="card lighten-100 text-dark text-center">
            <div class="p-4 align-items-center">

                         <button class="btn btn-success btn-md text-light">
                        Signaler un problème
                    </button>


            </div>
            </div>

        </div> <!-- End column 2 -->

    </div> <!-- End row 1 -->

</div> <!-- End main container -->
>>>>>>> Stashed changes
@endsection
