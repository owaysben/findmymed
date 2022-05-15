@extends('layouts.appbt')

@section('content')
    <!--Modal-->
    {{-- <div class="modal" id="enroll" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Inscrivez-vous à Find My Med</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="lead">Veuillez remplir les champs suivants</p>
                    <form>
                        <div class="mb-3">
                            <label for="prenom" class="col-form-label">
                                Prénom:
                            </label>
                            <input type="text" name="prenom" class="form-control" id="prenom">
                        </div>
                        <div class="mb-3">
                            <label for="nom" class="col-form-label">
                                Nom:
                            </label>
                            <input type="text" name="Nom" class="form-control" id="Nom">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">
                                Email:
                            </label>
                            <input type="text" name="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="tel" class="col-form-label">
                                Téléphone:
                            </label>
                            <input type="text" name="tel" class="form-control" id="tel">
                        </div>
                        <div class="mb-3">
                            <label for="choice" class="col-form-label">
                                S'inscrire au tant que:
                            </label>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="choicePharma" id="choicePharma">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Pharmacien
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="choiceClient" id="choiceClient" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Utilisateur par défaut
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Envoyer</button>
                </div>
            </div>
        </div>
    </div> --}}

    <!--Showcase-->
    <section class="bg-dark text-light p-5 pt-lg-2 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>Localisez vos <span class="text-warning">médicaments</span></h1>
                    <p class="lead my-4">
                        On cherche à rendre la recherche des médicaments critiques plus façile et efficace en se basant
                        sur
                        l'outil de la géolocalisation
                    </p>
                    @guest
                        <a class="btn btn-primary btn-large" {{-- data-bs-toggle="modal" data-bs-target="#enroll" --}} href="{{ route('register') }}">
                            Inscrivez-vous ici
                        </a>
                    @endguest
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="{{ asset('images/ph2.jpg') }}" alt="GPS">
            </div>
        </div>
    </section>

    <!--Search Engine-->
    <section class="bg-primary text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3">Commencez votre recherche</h3>
                <div class="input-group news-input">
                    @include('partials.search')
                </div>
            </div>
        </div>
    </section>

    <!--BOXES-->
    <section class="p-5 text-center">
        <div class="container">
            <div class="row text-center g-4">
                <!--first card-->
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-title mb-3">Recherche à distance</h3>
                            <p class="card-text">
                                Faites votre recherche à distance via Find My Med, économisez votre temps et trouvez vos
                                besoins le plus tot possible
                            </p>
                        </div>
                    </div>
                </div>
                <!--second card-->
                <div class="col-md">
                    <div class="card bg-secondary text-light">
                        <div class="card-body text-center">
                            <div class="h1">
                                <i class="bi bi-person-square"></i>
                            </div>
                            <h3 class="card-title mb-3">Localisation</h3>
                            <p class="card-text">
                                Localisez le médicament que vous cherchez dans les pharmacies les plus proches de vous
                                avec
                                un seul click
                            </p>
                        </div>
                    </div>
                </div>
                <!--third card-->
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1">
                                <i class="bi bi-people"></i>
                            </div>
                            <h3 class="card-title mb-3">Rendez-vous</h3>
                            <p class="card-text">
                                Réservez le médicament que vous souhaitez acheter et prenez un rendez-vous chez la
                                pharmacie
                                que vous choisissez
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Learn sections-->

    <!--learn-->
    <section class="p-5" id="learn">
        <div class="container">
            <div class="row align-items-center
        justify-content-between">
                <div class="col-md ">
                    <img src="{{ asset('images/ph3.jpg') }}" class="img-fluid" alt="#">
                </div>
                <div class="col-md p-5">
                    <h2>Pourquoi Find My Med</h2>
                    <p class="lead">
                        Find My Med est plus d'un espace de recherche des médicaments, notre site web est principalement
                        conçu pour sauver des vies
                    </p>
                    <p>
                        Avec les crises sanitaires liées à la pandémie du COVID-19, il est devenu indispensable de
                        penser à
                        introduire des solutions basées sur l'outil de l'informatique pour résoudre les problèmes
                        majeurs
                        que l'Algerie a souffert pendant ces derniers temps tels que le manque des médicaments critiques
                        dans la plupart des pharmacies.
                    </p>
                    <a href="#" class="btn btn-light m-3">
                        <i class="bi bi-chevron-right"></i>
                        Lire la suite </a>
                </div>
            </div>
        </div>
    </section>

    <!--react-->
    <section class="p-5 bg-dark text-light" id="react">
        <div class="container">
            <div class="row align-items-center
        justify-content-between">
                <div class="col-md p-5">
                    <h2>Espace pharmacies</h2>
                    <p class="lead">
                        Il faut mettre en évidence que Find My Med est là pour aider aussi les pharmaciens
                    </p>
                    <p>
                        Find My Med est la meilleure plateforme aux pharmaciens pour promouvoir leurs services et
                        élargir
                        leurs clientèle. C'est un exellent moyen de départ pour les nouvelles pharmacies.
                    </p>
                </div>
                <div class="col-md ">
                    <img src="{{ asset('images/ph2.jpg') }}" class="img-fluid" alt="#">
                </div>
            </div>
        </div>
    </section>

    <!--Question accordian-->
    <section class="p-5" id="questions">
        <div class="container">
            <h2 class="text-center mb-4">Questions fréquemment posées</h2>
            <div class="accordion accordion-flush" id="questions">

                <!--item01-->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-one">
                            Combien de temps durera ma réservation?
                        </button>
                    </h2>
                    <div id="question-one" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            La durée d'une réservation dépend de la distance entre le client et la pharmacie qu'il a
                            choisi.
                            Elle varie de 12h à 72h.
                        </div>
                    </div>
                </div>

                <!--item02-->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-two">
                            Est ce qu'on doit payer avant de réserver?
                        </button>
                    </h2>
                    <div id="question-two" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            Find My Med n'est pas un site de vente de médicaments mais un site de recherche. Tout
                            payment va
                            etre effectuer entre vous et votre pharmacien choisi en dehors de FMM.
                        </div>
                    </div>
                </div>

                <!--item03-->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-three">
                            Comment s'inscrire en tant qu'un pharmacien?
                        </button>
                    </h2>
                    <div id="question-three" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            Vous voulez s'inscrire comme pharmacien dans Find My Med? C'est simple, vous devez tout
                            simplement cliquez sur espace pharmacie dans le haut de la page, et remplir vos coordonnées
                            pour
                            créer un compte sur FMM.
                        </div>
                    </div>
                </div>

                <!--Item04-->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-four">
                            Que dois-je faire si je trouve pas mon médicament réservé chez le pharmacien? </button>
                    </h2>
                    <div id="question-four" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            Malgré que ce n'est pas fréquent de tomber dans une situation pareille, cependant, dans le
                            cas
                            ou vous trouverez pas votre médicament réservé chez le pharmacien vous devez signaler votre
                            problème en envoyant un rapport à Find My Med.<br>
                            Sachez que Find My Med vous offre plusieurs endroits, et vous donne le choix d'aller ou est
                            ce
                            que vous voulez.

                        </div>
                    </div>
                </div>

                <!--Item05-->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-five">
                            Extra question </button>
                    </h2>
                    <div id="question-five" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa.
                            Fusce
                            posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna
                            eros quis urna. Nunc viverra imperdiet enim. Fusce est.
                            Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                            ac
                            turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="instructors" class="p-5 bg-primary">
        <div class="container">
            <h2 class="text-center text-white">Nos pharmaciens</h2>
            <p class="lead text-center text-white mb-5">
                Plus de 100 pharmaciens ont choisi Find My Med pour promouvoir leurs services et optimiser la recherche
                des
                médicaments. Qu'attendez vous? Rejoignez-nous dés maintenant et faites partie de notre mouvement
            </p>
            <div class="row g-4">
                <!--First person-->
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/3.jpg" class="rounded-circle mb-3" alt="">
                            <h3 class="card-title mb-3">Ahmed Taki</h3>
                            <p class="card-text"> "Depuis que je me suis inscrit à Find My Med j'ai pu aider des
                                dizaines de clients avec des maladies chroniques..."
                                <br>
                                Travaille chez: pharmacie El Badr, route 07, Al Hidab, Setif
                            </p>
                            <a href="#">
                                <i class="bi bi-twitter text-dark mx-1"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-facebook text-dark mx-1"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-instagram text-dark mx-1"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-linkedin text-dark mx-1"></i>
                            </a>
                        </div>
                    </div>
                </div>


                <!--second person-->
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/7.jpg" class="rounded-circle mb-3" alt="">
                            <h3 class="card-title mb-3">Ali Belhocine</h3>
                            <p class="card-text">"Find My Med m'a aider à se lancer au tant qu'un nouveau
                                pharmacien
                                loin du centre ville..."
                                <br>
                                <br>
                                Travaille chez: pharmacie Triq Raya, route 07, Oued Essabt, Ghardaia
                            </p>
                            <a href="#">
                                <i class="bi bi-twitter text-dark mx-1"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-facebook text-dark mx-1"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-instagram text-dark mx-1"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-linkedin text-dark mx-1"></i>
                            </a>
                        </div>
                    </div>
                </div>


                <!--third person-->
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/women/6.jpg" class="rounded-circle mb-3" alt="">
                            <h3 class="card-title mb-3">Khalida Khedraoui</h3>
                            <p class="card-text">"Cette plateforme m'a permet d'atteindre mes clients les plus
                                éloignés et nécéssiteux..."
                                <br>
                                <br>
                                Travaille chez: pharmacie Hilal, Avenue Ibn Badis, Oran
                            </p>
                            <a href="#">
                                <i class="bi bi-twitter text-dark mx-1"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-facebook text-dark mx-1"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-instagram text-dark mx-1"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-linkedin text-dark mx-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!--fourth person-->
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/women/3.jpg" class="rounded-circle mb-3" alt="">
                            <h3 class="card-title mb-3">Sarah Chennoufi</h3>
                            <p class="card-text">"Je viens de renouvler mon contrat avec Find My Med, ce site m'a
                                permet d'analyser le marché et améliorer mes ventes..."
                                <br>
                                Travaille chez: pharmacie Ben Sahli, Bab Dzair, Blida
                            </p>
                            <a href="#">
                                <i class="bi bi-twitter text-dark mx-1"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-facebook text-dark mx-1"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-instagram text-dark mx-1"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-linkedin text-dark mx-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!--Contact & Map-->
    <section class="p-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md">
                    <h2 class="text-center mb-4">Contact FMM</h2>
                    <ul class="list-group list-group-flush lead">
                        <li class="list-group-item">
                            <span class="fw-bold"> Adresse: </span>
                            Université Saad Dahleb Blida 01, Soumaa route
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Téléphone: </span>
                            +213 521472189
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold"> Email: </span>
                            FindMyMed@frontendbc.test
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
