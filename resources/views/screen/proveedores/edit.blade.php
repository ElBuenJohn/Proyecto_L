@extends('layouts.panaderia')

@section('content')
    <h2 class="section-heading mb-5">
        <span class="section-heading-lower">EDITAR - PROVEDORES </span>
    </h2>



    {!! Form::model($provedor, ['route' => ['proveedores.update', $provedor->id], 'method' => 'PUT']) !!}
        @include('screen.proveedores.form')
    {!! Form::close() !!}


@endsection