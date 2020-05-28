@extends('layouts.panaderia')

@section('content')
    <h2 class="section-heading mb-5">
        <span class="section-heading-lower">PRODUCTOS</span>
    </h2>
    <hr>
    
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Categoria</th>
                        <th>Precio</th>
                        <th colspan = "3">
                            <a href="{{ route('productos.create') }}" class="btn btn-success">Nuevo</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        @if ($producto->condicion == 1)
                            <div>
                                <tr>
                                    <td>{{ $producto -> codigo }}</td>
                                    <td>{{ $producto -> nombre }}</td>
                                    <td>{{ $producto -> categoria }}</td>
                                    <td>{{ $producto -> precio }}</td>
                                    <td><a href="{{ route('productos.show', $producto->id) }}" class="btn btn-primary">Vista del Json</i></a></td>
                                    <td><a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-info">Editar</i></a></td>
                                    <td>
                                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            </div>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection