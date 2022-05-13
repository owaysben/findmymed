    <form action="{{ route('products.index') }}" class="d-flex mr-3">
        <input type="text" name="q" class="form-control" placeholder="Entrez le nom d'un medicament"
            value="{{ request()->q ?? '' }}">
        <button type="submit" class="btn btn-dark btn-lg">Rechercher</button>
    </form>
