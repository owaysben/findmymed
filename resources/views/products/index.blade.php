@extends('layouts.appbt')
@section('content')
    <!--Search Engine-->
    <section class="bg-primary text-light p-5">
        <div class="container px-5 mb-10">
            <div class="d-md-flex justify-content-between align-items-center position-relative">
                <h3 class="mb-3">Trouvez la pharmacie qui vous covient le plus</h3>
                <div class="input-group news-input">
                   @include('partials.search')
                </div>
            </div>
        </div>
    </section>
    <div class="container justify-items-center text-align-center">
    <section class="d-flex d-md-flex justify-items-center text-align-center">

        <div class="container">
            <div class="bg-white text-dark">
                <div class=" text-center">
                    <div>
                        <img src="\images\ph2.jpg" alt="med" style="max-height:45%; max-width:45%">
                    </div>

                        <h3 class="title mb-3">Nom Médoc</h3>
                        <p class="text">
                            Forme: smth.<br>
                            price: smth.
                        </p>
                </div>
            </div>
        </div>
    </section>
   <div class="card justify-items-center text-align-center mb-25"style="width: 100%;">


    <ul class="list-group list-group-flush">
        <li class="list-group-item shadow">
            <h5>Pharmacy name(+)</h5>
            <h6 class="fw-light">Adresse:@@@@@@@</h6>
            <div class="float-end">
            <button class="btn bt-md btn-primary justify-content-md-center" type="modal">
                Afficher localisation
            </button>
             <button class="btn bt-md btn-success justify-content-md-center" type="modal">
                Réserver
            </button>
            </div>
        </li>
        <li class="list-group-item shadow">
            <h5>Pharmacy name(+)</h5>
            <h6 class="fw-light">Adresse:@@@@@@@</h6>
            <div class="float-end">
            <button class="btn bt-md btn-primary justify-content-md-center" type="modal">
                Afficher localisation
            </button>
             <button class="btn bt-md btn-success justify-content-md-center" type="modal">
                Réserver
            </button>
            </div>
        </li>
        <li class="list-group-item shadow">
            <h5>Pharmacy name(+)</h5>
            <h6 class="fw-light">Adresse:@@@@@@@</h6>
            <div class="float-end">
            <button class="btn bt-md btn-primary justify-content-md-center" type="modal">
                Afficher localisation
            </button>
             <button class="btn bt-md btn-success justify-content-md-center" type="modal">
                Réserver
            </button>
            </div>
        </li>
    </ul>
    <div class="card-body ">
        <a href="#" class="card-link ">hna dji hadik tae <1....10></a>

    </div>
</div>
</div>
     <section class="bg-white text-dark p-2">
        <div class="container px-5 mb-15">
            <div class="d-md-flex justify-content-between align-items-center position-relative">
                <h3 class="mb-4 mt-4 text-secondary">Vous n'arrivez pas à trouver une pharmacie proche de vous?
                </h3> <br>

            </div>
            <h5 class="mb-4 fw-light "> Essayer de faire une commande chez l'une des pharmacies suivantes!</h5>

        </div>
    </section>
    <div class="container justify-items-center">
   <div class="card" style="width: 100%;">


    <ul class="list-group list-group-flush">
        <li class="list-group-item shadow">
           <h5>Pharmacy name(+)</h5>
            <h6 class="fw-light">Adresse:@@@@@@@</h6>
            <div class="float-end">
            <button class="btn bt-md btn-primary justify-content-md-center" type="modal">
                Afficher localisation
            </button>
             <button class="btn bt-md btn-success justify-content-md-center" type="modal">
                Commander
            </button>
            </div>
        </li>
        <li class="list-group-item shadow">
            <h5>Pharmacy name(+)</h5>
            <h6 class="fw-light">Adresse:@@@@@@@</h6>
            <div class="float-end">
            <button class="btn bt-md btn-primary justify-content-md-center" type="modal">
                Afficher localisation
            </button>
             <button class="btn bt-md btn-success justify-content-md-center" type="modal">
                Commander
            </button>
            </div>
        </li>
        <li class="list-group-item shadow"><h5>Pharmacy name(+)</h5>
            <h6 class="fw-light">Adresse:@@@@@@@</h6>
            <div class="float-end">
            <button class="btn bt-md btn-primary justify-content-md-center" type="modal">
                Afficher localisation
            </button>
             <button class="btn bt-md btn-success justify-content-md-center" type="modal">
                Commander
            </button>
            </div>
        </li>
    </ul>
    <div class="card-body ">
        <a href="#" class="card-link">hna dji hadik tae <1....10></a>

    </div>
</div>
    </div>
    <div class="container mx-20 my-20">
 {{--  <div class="card bg-light text-dark">
                        <div class="card-body text-center">

                          <h3 class="card-title mb-3">Résultats</h3>
    <section class="bg-light">
        <div class="list-group ">
            @foreach ($products as $product)
                <a href="{{ route('products.show', $product->id) }}" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $product->name }}</h5>


                    <p class="mb-1">{{ $product->description }}</p>
                    <small class="text-muted"><b> voie</b> {{ $product->voie }}</small> <br>
                    <small class="text-muted">forme {{ $product->forme }}</small> <br>
                    <small class="text-muted">prix {{ $product->price }}da</small>
                     <button class="btn btn-primary btn-md justify-content-md-end"> Afficher position </button>
                    </div>
                </a>
            @endforeach



        </div>
        {{ $products->appends($_GET)->links() }}
    </section>
                        </div>
                        --}}

@endsection
