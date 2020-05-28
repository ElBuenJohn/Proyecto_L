@extends('layouts.panaderia')

@section('content')
    <h2 class="section-heading mb-5">
        <span class="section-heading-lower">INGRESAR - CLIENTE</span>
    </h2>

    {!! Form::open(['route' => 'clientes.store']) !!}
        @include('screen.clientes.form')
    {!! Form::close() !!}

@endsection