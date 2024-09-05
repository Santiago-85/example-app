<!-- resources/views/index.blade.php -->
@extends('layouts.layout')

@section('title', 'Inicio')

@section('content')
    <div class="product">
        <a href="{{ url('product1') }}">
            <img src="img/greyfog.jpg" alt="Nike Dunk GreyFog" width="250">
        </a>
        <h2>Nike Dunk GreyFog</h2>
    </div>
    <div class="product">
        <a href="{{ url('product2') }}">
            <img src="img/panda.jpg" alt="Nike Dunk Panda" width="250">
        </a>
        <h2>Nike Dunk Panda</h2>
    </div>
@endsection
