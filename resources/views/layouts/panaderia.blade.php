@extends('layouts.app')
@section('contenido')

    <h1 class="site-heading text-center text-white d-none d-lg-block">
        <span class="site-heading-upper text-primary mb-3">Bienvenidos</span>
        <span class="site-heading-lower">Panaderia el pan feliz</span>
    </h1>
    <p class="site-heading text-center text-white d-none d-lg-block">
        {{ auth()-> user() -> name }}
    </p>
    
    @if(Auth::check())
            @if (Auth::user()->rol_id == 1)
                @include('layouts.plantillas.sidebaradministrador')
            @elseif (Auth::user()->rol_id == 2)
                @include('layouts.plantillas.sidebaraempleado')
            
            @else

            @endif

        @endif
        
@endsection