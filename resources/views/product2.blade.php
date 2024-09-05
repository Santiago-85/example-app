@extends('layouts.layout')

@section('title', 'Producto 2')

@section('content')
    <div class="product">
        <img src="img/panda.jpg" alt="Nike Dunk Panda" width="250">
        <h2>Nike Dunk Panda</h2>
        <h4>Q 1,400.00</h4>
        <table>
            <tr>
                <th>Marca</th>
                <th>Color</th>
            </tr>
            <tr>
                <th>Nike</th>
                <th>Negro con blanco</th>
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
