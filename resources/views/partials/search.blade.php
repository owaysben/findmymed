    <form action="{{ route('products.index') }}" class="form-control bg-primary border-primary" method="GET">
        <div class="input-group news-input">
            <input type="search" name="q" class="form-control mr-sm-2 typeahead" id="cordbtn "
                placeholder="Entrez le nom d'un médicament" value="{{ request()->q ?? '' }}">
            <button type="submit" class="btn btn-dark btn-lg ">Rechercher</button>
        </div>
    </form>
