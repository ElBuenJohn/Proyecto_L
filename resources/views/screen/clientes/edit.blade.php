@extends('layouts.panaderia')

@section('content')
    <h2 class="section-heading mb-5">
        <span class="section-heading-lower">EDITAR - CLIENTES </span>
    </h2>



    {!! Form::model($clientes, ['route' => ['clientes.update', $clientes->id], 'method' => 'PUT']) !!}
        @include('screen.clientes.form')
    {!! Form::close() !!}


@endsection