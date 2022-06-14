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
    <div class="container justify-items-center">
   <div class="card" style="width: 95%;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Nom médicament</h5>
        <p class="card-text">
            forme: smth <br>
            Prix: default
        </p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Pharmacy name(+) </li>
        <li class="list-group-item">Pharmacy name(+)</li>
        <li class="list-group-item">Pharmacy name(+)</li>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link">hna dji hadik tae <1....10></a>

    </div>
</div>
    </div>
     <section class="bg-light text-dark p-2">
        <div class="container ">
            <div class="d-md-flex justify-content-between align-items-center position-relative">
                <h3 class=>Vous n'arrivez pas à trouver une pharmacie proche de vous?
                </h3> <br>

            </div>
            <h6>Essayer de faire une commande chez l'une des pharmacies suivantes!</h6>
        </div>
    </section>
    <div class="container justify-items-center">
   <div class="card" style="width: 95%;">


    <ul class="list-group list-group-flush">
        <li class="list-group-item">Pharmacy name(-) </li>
        <li class="list-group-item">Pharmacy name(-)</li>
        <li class="list-group-item">Pharmacy name(-)</li>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link">hna dji hadik tae <1....10></a>

    </div>
</div>
    </div>
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
