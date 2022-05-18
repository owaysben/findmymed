@extends('layouts.appbt')
@section('title')
<!--Map of the wanted pharmacie-->
    <section id="map">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
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
    <div id="map"></div>
{{ $product->name }}
@endsection
@section('content')
    <!--Search Engine-->
    @foreach ($product->quantities as $quantity)
        <h3>{{ $quantity->pharmacy->name }}</h3>
        <h5>{{ $quantity->pharmacy->latitude }} : {{ $quantity->pharmacy->longitude }}</h5>
        <hr>
        <header id="floating-panel"> <b>Mode of Travel: </b>
            <div style="display: flex; position: fixed;inset: 0;z-index: 999;">

    <div id="map" style="width: 100%;height: 100%;"></div>
            </div>

    @endforeach

    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdrWuM--TmAD1Tmtg0V2MjBzpvPy6DZyg&callback=initMap&v=weekly"
      defer
    ></script>
    <script>
function initMap() {
  const myLatLng = { lat: -25.363, lng: 131.044 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: myLatLng,
  });

  new google.maps.Marker({
    position: myLatLng,
    map,
    title: "Hello World!",
  });
}

window.initMap = initMap;


    </script>
@endsection
