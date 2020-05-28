@extends('layouts.panaderia')

@section('content')
    <h2 class="section-heading mb-5">
        <span class="section-heading-lower">CREAR - PRODUCTO</span>
    </h2>

    {!! Form::open(['route' => 'productos.store', 'method' => 'POST']) !!}
        @include('screen.productos.form')
    {!! Form::close() !!}

@endsection
