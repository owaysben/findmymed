@extends('layouts.appbt')
@section('content')


    <!--Main container. Everything must be contained within a top-level container.-->
<div class="container-fluid py-5">

    <!--First row (only row)-->
    <div class="row extra_margin ">

        <!-- First column (smaller of the two). Will appear on the left on desktop and on the top on mobile. -->
        <div class="col-md-4 col-sm-12 col-xs-12">

            <div class="card" style="md-4 sm-12 xs-12 bg-primary">


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
                                        <a href="#" class="social-icon"><i class="fab fa-codepen" aria-hidden="true"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-github-square" aria-hidden="true"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-linkedin-square" aria-hidden="true"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>

                            </div>
                    </li>
                    <li class="list-group-item">
                        <p>Tel: <span style="font-weight: 2; "> {{ Auth::user()->number }}</span></p>
                    </li>
                    <li class="list-group-item">
                        <p>Email: <span style="font-weight: 2;">{{ Auth::user()->email }}</span></p>
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
                            <div class="h1">
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

                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

            </div>
            <div class="card lighten-100 text-dark text-center">
            <div class="p-4 align-items-center">

                         <button class="btn btn-success btn-md text-light" data-bs-toggle="modal" data-bs-target="#signal">
                        Signaler un problème
                    </button>


            </div>
            </div>

        </div> <!-- End column 2 -->

    </div> <!-- End row 1 -->

</div> <!-- End main container -->






@endsection
