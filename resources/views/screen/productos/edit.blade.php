@extends('layouts.panaderia')

@section('content')
    <h2 class="section-heading mb-5">
        <span class="section-heading-lower">EDITAR - PRODUCTO</span>
    </h2>



    {!! Form::model($productos, ['route' => ['productos.update', $productos->id], 'method' => 'PUT']) !!}
        @include('screen.productos.form')
    {!! Form::close() !!}


@endsection