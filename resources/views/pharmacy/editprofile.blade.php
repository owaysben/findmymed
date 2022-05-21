@extends('layouts.appbt')
@section('content')
    <!--Main container. Everything must be contained within a top-level container.-->
    <div class="container-fluid py-6 ">
        @include('partials.flashmessages')
        <div class="card ">
            <div class="card-header">Mon Profile</div>
            <div class="card-body">
                <form action="{{ route('pharmacy.updateprofile') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="number">Number</label>
                        <input type="number" class="form-control" name="number" id="number" value="{{ $user->number }}">
                    </div>
                    <div class="form-group">
                        <label for="adresse">Adresse</label>
                        <input type="text" class="form-control" name="adresse" id="adresse" value="{{ $user->adresse }}">
                    </div>
                    {{-- <div class="form-group">
                    <label for="about">A</label>
                </div> --}}
                    <div class="form-group pt-3">
                        <button type="submit" class="btn btn-primary">Confirmer</button>
                        <a href="/pharmacy/profile" class="btn btn-secondary">Annuler</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End main container -->
@endsection
