<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF_8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="D:/web/CSS projects/bootstrapp.css" type="text/css">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title> Results </title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
        <div class="container">
            <a href="#" class="navbar-brand"> Find My Med</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="#navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#about" class="nav-link">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#Seconnecter" class="nav-link" data-bs-toggle="modal" data-bs-target="#login">Se
                            connecter</a>
                    </li>
                    <li class="nav-item">
                        <a href="#sinscrire" class="nav-link" data-bs-toggle="modal"
                            data-bs-target="#enroll">S'inscrire</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Search Engine-->
    <section class="bg-primary text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3">Trouvez la pharmacie qui vous covient le plus</h3>
                <div class="input-group news-input">
                    <input type="text" class="form-control" placeholder="Entrez le nom d'un medicament">
                    <button class="btn btn-dark btn-lg" type="button">Rechercher</button>
                </div>
            </div>
        </div>
    </section>
    <!--Map of the wanted pharmacie-->
    <section id="map">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0"
                    marginwidth="0"
                    src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Ben sahli pharmacie blida&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                </iframe>
                <a href="https://mcpepro.com/">MCPEPRO</a>
            </div>
            <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    width: 100%;
                    height: 400px;
                }

                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    width: 100%;
                    height: 400px;
                }

                .gmap_iframe {
                    height: 400px !important;
                }

            </style>
        </div>
    </section>
    <section class="bg-light">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <button class="btn btn-primary btn-md justify-content-md-end"> Afficher position </button>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small class="text-muted">And some muted small print.</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <button class="btn btn-primary btn-md justify-content-md-end ">
                        Afficher position
                    </button>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small class="text-muted">And some muted small print.</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <button class="btn btn-primary btn-md justify-content-md-end"> Afficher position </button>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small class="text-muted">And some muted small print.</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <button class="btn btn-primary btn-md justify-content-md-end"> Afficher position </button>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small class="text-muted">And some muted small print.</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <button class="btn btn-primary btn-md justify-content-md-end"> Afficher position </button>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small class="text-muted">And some muted small print.</small>
            </a>

        </div>
    </section>
    <!--Footer-->
    <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">Copyright &copy; 2022 Find My Med </p>
            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
