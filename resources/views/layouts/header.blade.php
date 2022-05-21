<!--Navbar-->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
    <div class="container">
        <a href="/" class="navbar-brand"> Find My Med</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="#navmenu">
            <ul class="navbar-nav ms-auto">
                {{-- <li class="nav-item">
                    <a href="/" class="nav-link">A propos</a>
                </li> --}}
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Se Connecter</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">S'inscrire</a>
                        </li>
                    @endif
                @else
                    {{-- <li class="nav-item">
                        <a href="#notifs" class="nav-link" data-bs-toggle="modal"
                            data-bs-target="#notifs">Notifications <span class="badge bg-secondary">4</span>
                        </a>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @role('user')
                                <a class="dropdown-item" href="{{ route('user.profile') }}">
                                    {{ __('Mon profile') }}
                                </a>
                            @endrole
                            @role('pharmacy')
                                <a class="dropdown-item" href="{{ route('pharmacy.profile') }}">
                                    {{ __('Mon profile') }}
                                </a>
                            @endrole
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                {{ __('Deconnecter') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
