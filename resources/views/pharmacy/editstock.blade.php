@extends('layouts.appbt')
@section('content')
    <section>
        <section class="bg-primary text-light p-5">
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-center">

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
                        <h3 class="card-title mb-3">Modifier la quantity un médicament</h3>
                        <form action="/pharmacy/stock/update/{{ $productquantity->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="text" value="{{ $product->name }}" disabled>
                            <input type="number" placeholder="Quantité de médicament..."
                                value="{{ $productquantity->quantity }}" name="quantity">
                            <button type="submit" class="btn btn-primary">confirmer</button>
                            <a href="{{ route('pharmacy.stock') }}" class="btn btn-secondary">Annuler</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
