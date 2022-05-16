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
{{ $product->name }}
@endsection
@section('content')
    <!--Search Engine-->
    @foreach ($product->quantities as $quantity)
        <h3>{{ $quantity->pharmacy->name }}</h3>
        <h5>{{ $quantity->pharmacy->latitude }} : {{ $quantity->pharmacy->longitude }}</h5>
        <hr>
    @endforeach
    <script>
        var product = JSON.decode("{{{ $product->quantities }}}");
        alert(product);
    </script>
@endsection
