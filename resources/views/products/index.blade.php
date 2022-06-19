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

                        <h3 class="title mb-3">{{ $product->name }}</h3>
                        <p class="text">
                            Forme: {{ $product->forme }}<br>
                            price: {{ $product->price }}
                        </p>
                    </div>
                </div>
        </section>
        <div class="card justify-items-center text-align-center mb-25" style="width: 100%;">

            @if ($pharmacieswith->count() > 0)
                <ul class="list-group list-group-flush">
                    @foreach ($pharmacieswith as $item)
                        <li class="list-group-item shadow">
                            <h5>{{ $item->pharmacy->name }}</h5>
                            <h6 class="fw-light">
                                Adresse: {{ $item->pharmacy->address ?? 'adresse unavaible pour le moment' }}</h6>
                            <h6 class="fw-light">
                                Quantité Disponible: {{ $item->quantity ?? '' }}</h6>
                            <div class="float-end">
                                <button class="btn bt-md btn-primary justify-content-md-center" data-bs-toggle="modal"
                                    data-bs-target="#map" id="mapBtn">
                                    Afficher localisation
                                </button>
                                <!-- Map modal code -->
                                <div class="modal fade" id="map" tabindex="-1" w-auto>
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Suivez le chemin!</h5>
                                                <button type="button" data-dismiss="modal" aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="mapl" style="width: 900px; height: 500px;"></div>
                                            </div>
                                            <!--If you need buttons or whatsover, if u don't just drop the footer-->
                                            <!-- <div class="modal-footer">
                                                                                                                                                                                                        <button type="button" class="btn btn-secondary"
                                                                                                                                                                                                            data-bs-dismiss="modal">Close</button>
                                                                                                                                                                                                    </div> -->
                                        </div>
                                    </div>
                                </div>
                                <form action="/reserve/create/{{ $item->id }}" method="get"
                                    class="justify-content-md-end ">
                                    @csrf
                                    <button class="btn bt-md btn-success justify-content-md-center" type="modal">
                                        Réserver
                                    </button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <div class="card-body ">
                    <div class="card-link ">{{ $pharmacieswith->links() }}</div>

                </div>
            @else
                <div class="card-body ">
                    <h4>Il n'y a pas de médicament disponible</h4>
                </div>
            @endif
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

                @if ($pharmacieswithout->count() > 0)
                    <ul class="list-group list-group-flush">
                        @foreach ($pharmacieswithout as $without)
                            <li class="list-group-item shadow">
                                <h5>{{ $without->pharmacy->name }}</h5>
                                <h6 class="fw-light">Adresse:{{ $without->pharmacy->address }}</h6>
                                <div class="float-end">
                                    <button class="btn bt-md btn-primary justify-content-md-center" type="modal">
                                        Afficher localisation
                                    </button>
                                    <form action="/commande/create/{{ $without->id }}" method="get">
                                        <button class="btn bt-md btn-success justify-content-md-center" type="modal">
                                            Commander
                                        </button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="card-body ">
                        <div class="card-link">{{ $pharmacieswithout->links() }}</div>

                    </div>
                @else
                    <div class="card-body ">
                        <h4>Il n'y a pas de médicament disponible</h4>
                    </div>
                @endif
            </div>
        </div>
        <div class="container mx-20 my-20">
        @endsection
