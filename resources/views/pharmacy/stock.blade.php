@extends('layouts.appbt')
@section('content')
    <section>
      <section class="bg-primary text-light p-5">
        <div class="container">
          <div class="d-md-flex justify-content-between align-items-center">
            <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate, natus velit eaque
               iure modi maxime eum vitae pariatur dolores?</h3>

            <!--<div class="input-group news-input">
              <input type="text" class="form-control" placeholder="Entrez le nom d'un medicament">
              <button class="btn btn-dark btn-lg" type="button">Rechercher</button>
            </div>-->
            <button class="btn btn-light btn-large" data-bs-toggle="modal" data-bs-target="#ajouterMed">
              Ajouter un médicament
            </button>
            <!--Modal-->
            <div class="modal text-dark" id="ajouterMed" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Ajouter un nouveau médicament à votre stock</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
            </div>
          </div>
        </div>
      </section>
      <div class="pt-0">
     <!--second card-->
     <div class="col-md">
         <div class="card bg-light text-dark">
            <div class="card-body text-center">
              <div class="h1">
                <i class="bi bi-stack"></i>
              </div>
              <h3 class="card-title mb-3">Mon stock</h3>
            <table class="table table-light justify-content-between align-items-center ">
            <thead class="table-dark">
            <tr>
              <th scope="row">ID medicament</th>
              <th colspan="2">Nom médicament</th>
              <th>Prix</th>
              <th>Quantité</th>
              <th colspan="2">
                Lorem
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">3</th>
              <td colspan="2" >Larry the Bird</td>
              <td>2500</td>
              <td class="fw-5">20</td>
              <td>
                <button class="btn btn-md justify-content-md-end">
                  <i class="bi bi-pen"></i>
                </button>
                <button class="btn btn-md justify-content-md-end">
                  <i class="bi bi-trash"></i>
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>2500</td>
              <td class="fw-5">20</td>
              <td>
                <button class="btn btn-md justify-content-md-end">
                  <i class="bi bi-pen"></i>
                </button>
                <button class="btn btn-md justify-content-md-end">
                  <i class="bi bi-trash"></i>
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>2500</td>
              <td class="fw-5">20</td>
              <td>
                <button class="btn btn-md justify-content-md-end">
                  <i class="bi bi-pen"></i>
                </button>
                <button class="btn btn-md justify-content-md-end">
                  <i class="bi bi-trash"></i>
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>2500</td>
              <td class="fw-5">20</td>
              <td>
                <button class="btn btn-md justify-content-md-end">
                  <i class="bi bi-pen"></i>
                </button>
                <button class="btn btn-md justify-content-md-end">
                  <i class="bi bi-trash"></i>
                </button>
              </td>
            </tr>

          </tbody>
        </table>
        </div>
        </div>
        </div>
      </div>
    </section>
@endsection
