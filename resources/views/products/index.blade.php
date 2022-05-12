@extends('layouts.appbt')
@section('content')
    <!--Search Engine-->
    <section class="bg-primary text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3">Trouvez la pharmacie qui vous covient le plus</h3>
                <div class="input-group news-input">
                    <input type="text" class="form-control" placeholder="Entrez le nom d'un medicament">
                    <button class="btn btn-dark btn-lg" type="button">Rechercher</button>
                </div>
            </div>
        </div>
    </section>
    <!--Map of the wanted pharmacie-->
    <section id="map">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Ben sahli pharmacie blida&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                </iframe>
                <a href="https://mcpepro.com/">MCPEPRO</a>
            </div>
            <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    width: 100%;
                    height: 400px;
                }

                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    width: 100%;
                    height: 400px;
                }

                .gmap_iframe {
                    height: 400px !important;
                }

            </style>
        </div>
    </section>
    <section class="bg-light">
        <div class="list-group">
            @foreach ($products as $product)
                <a href="{{ route('products.show', $product->id) }}" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $product->name }}</h5>
                        <button class="btn btn-primary btn-md justify-content-md-end"> Afficher position </button>
                    </div>
                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                    <small class="text-muted">And some muted small print.</small>
                </a>
            @endforeach

            {{ $products->links() }}

        </div>
    </section>
@endsection
