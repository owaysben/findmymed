@extends('layouts.appbt')
@section('title')
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
