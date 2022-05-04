@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <section class="hero">
        <h1>Welkom op deze webshop!</h1>
        <p>Deze webshop is momenteel in aanbouw, maar gaat iets moois worden!</p>
    </section>

    <section class="trending-products">
        <h2>
            <span>Trending Products</span>
        </h2>
    </section>
@endsection
