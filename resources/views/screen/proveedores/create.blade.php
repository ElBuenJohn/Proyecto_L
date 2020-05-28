@extends('layouts.panaderia')

@section('content')
    <h2 class="section-heading mb-5">
        <span class="section-heading-lower">INGRESAR - PROVEEDOR</span>
    </h2>

    {!! Form::open(['route' => 'proveedores.store']) !!}
        @include('screen.proveedores.form')
    {!! Form::close() !!}

@endsection