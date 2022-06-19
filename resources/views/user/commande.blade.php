@extends('layouts.appbt')
@section('content')
    <section>

        <div class="pt-0 mt-7">
            <!--second card-->
            <div class="col-md mt-5 mx-5">
                <div class="card bg-light text-dark">
                    <div class="card-body text-center">
                        <div class="h1">
                            <i class="bi bi-stack"></i>
                        </div>
                        <h3 class="card-title mb-3">Commander Un Médicament</h3>
                        <form action="/commande/{{ $id }}" method="post" class="container">
                            @csrf
                            <div class="mb-3">
                                <label for="product">Nom de médicament:</label>
                                <input type="text" name="name" id="product" placeholder="Nom de médicament..."
                                    value="{{ $data->product->name }}" disabled class="form-control">

                                <input type="number" name="quantity" id="" placeholder="Quantité de médicament..."
                                    class="form-control" required ">
                                        <div class="  container m-5 center">
                                <button type="submit" class="btn btn-primary">confirmer</button>
                                <a href="{{ route('house') }}" class="btn btn-secondary">Annuler</a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
