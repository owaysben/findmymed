@extends('layouts.appbt')
@section('content')
<section>
      <section class="bg-primary text-light p-5">
        <div class="container">
          <div class="d-md-flex justify-content-between align-items-center">
            <h3 class="mb-3">Gérer mon stock</h3>
          </div>
        </div>
      </section>
      <div class="py-6">
        <table class="table table-light justify-content-between align-items-center py-6">
            <thead>
              <tr>
                <th scope="row">ID medicament</th>
                <th colspan="2" class="table-active">Nom médicament</th>
                <th>Prix</th>

                <th>Quantité</th>
                <th colspan="2">

                </th>

              </tr>
            </thead>

            <tbody>


              <tr>
                <th scope="row">3</th>
                <td colspan="2" class="table-active">Larry the Bird</td>
                <td>2500</td>
                <td class="fw-5">20</td>
                <td>
                    <button class="btn btn-primary btn-md justify-content-md-end">
                        Modifier
                    </button>

                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2" class="table-active">Larry the Bird</td>
                <td>2500</td>
                <td class="fw-5">20</td>
                <td>
                    <button class="btn btn-primary btn-md justify-content-md-end">
                        Modifier
                    </button>

                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2" class="table-active">Larry the Bird</td>
                <td>2500</td>
                <td class="fw-5">20</td>
                <td>
                    <button class="btn btn-primary btn-md justify-content-md-end">
                        Modifier
                    </button>

                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2" class="table-active">Larry the Bird</td>
                <td>2500</td>
                <td class="fw-5">20</td>
                <td>
                    <button class="btn btn-primary btn-md justify-content-md-end">
                        Modifier
                    </button>

                </td>
              </tr>
            </tbody>
          </table>
        </div>
    </section>
@endsection
