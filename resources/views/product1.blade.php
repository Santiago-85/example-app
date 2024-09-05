@extends('layouts.layout')

@section('title', 'Producto 1')

@section('content')
    <div class="product">
        <img src="img/greyfog.jpg" alt="Nike Dunk GreyFog" width="250">
        <h2>Nike Dunk GreyFog</h2>
        <h4>Q 1,250.00</h4>
        <table>
            <tr>
                <th>Marca</th>
                <th>Color</th>
            </tr>
            <tr>
                <th>Nike</th>
                <th>Gris con blanco</th>
            </tr>
            <tr>
                <th>Deporte</th>
                <th>País Origen</th>
            </tr>
            <tr>
                <th>Casual</th>
                <th>Indonesia</th>
            </tr>
        </table>
    </div>
    <nav>
        <a href="{{ url('/') }}">MENU</a>
    </nav>
@endsection
