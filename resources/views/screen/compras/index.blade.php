@extends('layouts.panaderia')

@section('content')
    <h2 class="section-heading mb-5">
        <span class="section-heading-lower">COMPRAS</span>
    </h2>
    <hr>
    
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Productos</th>
                        <th>Proveedores</th>
                        <th>numero de compra</th>
                        <th>total</th>
                        <th colspan = "3">
                            <a href="{{ route('compras.create') }}" class="btn btn-success">Nuevo</a>
                            
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($compras as $compra)
                            <div>
                                <tr>
                                    <td>{{$compra -> idproducto }}</td>
                                    <td>{{ $compra -> idproveedor }}</td>
                                    <td>{{ $compra -> num_compra }}</td>
                                    <td>{{ $compra -> total }}</td>
                                    <td><a href="{{ route('compras.edit', $compra->id) }}" class="btn btn-info">Editar</i></a></td>
                                    <td>
                                        <form action="{{ route('compras.destroy', $compra->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection
