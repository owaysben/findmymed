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
    <div class="container align-items-center">
   <div class="card" style="width: 80%;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">An item</li>
        <li class="list-group-item">A second item</li>
        <li class="list-group-item">A third item</li>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
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
