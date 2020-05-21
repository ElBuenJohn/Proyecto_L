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

<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt="">
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">Pan como Hecho en casa</span>
                    <span class="section-heading-lower">trabajando diariamente</span>
                </h2>
                <p class="mb-3">¡La mejor panaderia de todo méxico!
                </p>
                <div class="intro-button mx-auto">
                    <a class="btn btn-primary btn-xl" href="#">¡Ven ya!</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">Our Promise</span>
                        <span class="section-heading-lower">To You</span>
                    </h2>
                    <p class="mb-0">When you walk into our shop to start your day, we are dedicated to providing you
                        with friendly service, a welcoming atmosphere, and above all else, excellent products made with
                        the highest quality ingredients. If you are not satisfied, please let us know and we will do
                        whatever we can to make things right!</p>
                </div>
            </div>
        </div>
    </div>
</section> -->

<footer class="footer text-faded text-center py-5">
    <div class="container">
        <h3>
            <p class="m-0 small">Panaderia INGEniosa</p>
        </h3>
    </div>
</footer>

@endsection