    <form action="{{ route('products.index') }}" class="d-flex mr-3" method="GET">
        <input type="search" name="q" class="form-control" placeholder="Entrez le nom d'un medicament"
            value="{{ request()->q ?? '' }}">
        <button type="submit" class="btn btn-dark btn-lg">Rechercher</button>
    </form>
