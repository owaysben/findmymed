@extends('layouts.appbt')
@section('content')
<!--Main container. Everything must be contained within a top-level container.-->
  <div class="container-fluid py-6">

    <!--First row (only row)-->
    <div class="row extra_margin ">

      <!-- First column (smaller of the two). Will appear on the left on desktop and on the top on mobile. -->
      <div class="col-md-4 col-sm-12 col-xs-12">

        <div class="card" style="md-4 sm-12 xs-12 ">


            <div class="card-body">
              <h5 class="card-title">#UserName</h5>

            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <p>Tel: <span style="fw-2"> +213 541610841 </span></p>
              </li>
              <li class="list-group-item">
                <p>Email: <span style="fw-2">client@gmail.com</span></p>
                </li>
              <li class="list-group-item">
                <button class="btn btn-sm"><a href="#" class="LinkedIn"><i class="bi bi-linkedin"></i></a></button>
                <button class="btn btn-sm"><a href="#" class="Facebook"><i class="bi bi-facebook"></i></a></button>
                <button class="btn btn-sm"><a href="#" class="Instagram"><i class="bi bi-instagram"></i></a></button>

              </li>
            </ul>
            <div class="card-body">
              <button class="btn btn-primary btn-md text-light"><a href="#" class="card-link text-light">Signaler un problème</a></button>
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

                    <!--second card-->
                    <div class="col-md">
                     <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                          <div class="h1">
                            <i class="bi bi-book"></i>
                          </div>
                          <h3 class="card-title mb-3">Activité récente</h3>
                          <!--<a href="#" class="btn btn-primary">Consulter</a>-->
                          <table class="table table-light justify-content-between align-items-center">
                            <thead>
                              <tr>
                                <th scope="row">Médicaments</th>
                                <td colspan="2" class="table-active">Type</td>
                                <td>Date</td>
                                <td>Temps</td>
                                <td>Quantité</td>
                                <td colspan="2">
                                  Ma décision
                                </td>

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
                        </div>
                      </div>
                    </div>
            </section>
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
@endsection
