@extends('layouts.panaderia')

@section('content')
    <h2 class="section-heading mb-5">
        <span class="section-heading-lower">PROVEEDORES</span>
    </h2>
    <div class="row">
    <div class="col-md-12">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Email</th>
                <th colspan = "3">
                    <a href="{{ route('proveedores.create') }}" class="btn btn-success"></i>Nuevo</a>
                </th>
             </tr>
    
        </thead>
        <tbody>
        @foreach($proveedores as $proveedor)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$proveedor->nombre}}</td>
            <td>{{$proveedor->direccion}}</td>
            <td>{{$proveedor->telefono}}</td>
            <td>{{$proveedor->email}}</td>
            <td>
            
            <td>
                <td><a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-info">Editar</i></a></td>
                <td><form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger">Eliminar</button>
                                       
            
            </form>
            
            
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection