@extends('layouts.app')
@section('contenido')

<h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Bienvenidos</span>
    <span class="site-heading-lower">Panaderia el pan feliz</span>
</h1>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="{{ url('/home') }}">Entrar</a>
                        </li>
                    @else
                        <li class="nav-item px-lg-4">
                            <a class="nav-link text-uppercase text-expanded"href="{{ route('login') }}">Ingresar</a>
                        </li>

                        <li class="nav-item px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="{{ route('register') }}">Registrar</a>
                        </li>
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="footer text-faded text-center py-5">
    <div class="container">
        <h3>
            <p class="m-0 small">Panaderia INGEniosa</p>
        </h3>
    </div>
</footer>

@endsection