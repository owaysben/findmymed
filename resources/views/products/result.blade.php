@extends('layouts.appbt')
@section('content')
<div class="card bg-light text-dark">
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
                    <small class="text-muted">prix {{ $product->price }}da</small>
                     <button class="btn btn-primary btn-md justify-content-md-end"> Afficher position </button>
                    </div>
                </a>
            @endforeach



        </div>
        {{ $products->appends($_GET)->links() }}
    </section>
                        </div>


@endsection
