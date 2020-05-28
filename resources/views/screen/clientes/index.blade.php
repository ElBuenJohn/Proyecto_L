@extends('layouts.panaderia')

@section('content')
    <h2 class="section-heading mb-5">
        <span class="section-heading-lower">CLIENTES</span>
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
                    <a href="{{ route('clientes.create') }}" class="btn btn-success"></i>Nuevo</a>
                </th>
             </tr>
    
        </thead>
        <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->direccion}}</td>
            <td>{{$cliente->telefono}}</td>
            <td>{{$cliente->email}}</td>
            <td>
            
            <td>
                <td><a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-info">Editar</i></a></td>
                <td><form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
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