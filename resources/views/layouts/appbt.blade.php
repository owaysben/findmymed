<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>findmymed</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.14.1/build/ol.js"></script>
    <script src="{{ asset('js/select2.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"
        integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="{{ asset('js/mdb.min.js') }}" defer></script> -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-single').select2({
                placeholder: 'Nom de médicament...',
                allowClear: true
            });
        });
    </script>
    <script src="{{ asset('js/map.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">




    <link href="{{ asset('css/select2.css') }}" rel="stylesheet" />
    <!-- <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('css/profiles.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.14.1/css/ol.css" type="text/css">
    <!-- <style>
        .map {
            height: 180px;
            width: 100%;
        }
    </style> -->



</head>

<body class="d-flex flex-column min-vh-100">
    <div id="app">
        <!--header-->
        <header>
            @include('layouts.header')
        </header>

        <main class="mb-5">
            @yield('content')
        </main>

        <footer class="mt-auto position-relative w-100">
            @include('layouts.footer')
        </footer>

    </div>

</body>
<script>
    url = " {{ route('get-result') }}"
    $('input.typeahead').typeahead({
        source: function(value, process) {
            return $.get(url, {
                value: value
            }, function(data) {
                return process(data);
            });
        }
    });
</script>
<script>
    $('#cordbtn').click(function() {

    });
</script>
<script>
    $('#mapBtn').click(function() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                console.log(position.coords);
                var lat = position.coords.latitude;
                var long = position.coords.longitude;
                var map = L.map('mapl').setView([lat, long], 13);
                var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 15,
                    center: L.latLng(lat, long),
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);
                var marker = L.marker([lat, long]).addTo(map)
                    .bindPopup('<b>voici votre emplacement</b>').openPopup();
            });
        }
    });
</script>


</html>
