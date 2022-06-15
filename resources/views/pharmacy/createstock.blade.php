@extends('layouts.appbt')
@section('content')
    <section>
        <!-- <section class="bg-primary text-light p-5">
                                            <div class="container">
                                                <div class="d-md-flex justify-content-between align-items-center">

                                                </div>
                                            </div>
                                        </section> -->
        <div class="pt-0 mt-7">
            <!--second card-->
            <div class="col-md mt-5 mx-5">
                <div class="card bg-light text-dark">
                    <div class="card-body text-center">
                        <div class="h1">
                            <i class="bi bi-stack"></i>
                        </div>
                        <h3 class="card-title mb-3">Ajouter Un médicament</h3>
                        <form action="/pharmacy/stock" method="POST">
                            @csrf
                            <!-- <input type="text" name="name" id="product" placeholder="Nom de médicament..."> -->
                            <select name="product" style="width: 300px" class="js-example-basic-single form-control">
                                <option></option>
                                @foreach ($data as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>

                            <input type="number" name="quantity" id="" placeholder="Quantité de médicament...">
                            <button type="submit" class="btn btn-primary">confirmer</button>
                            <a href="{{ route('pharmacy.stock') }}" class="btn btn-secondary">Annuler</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
