{!! Form::token() !!}

<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('codigo', 'Código') !!}
        {!! Form::text('codigo', null, ['class' => 'form-control', 'required']) !!}
    </div>
    

    <div class="form-group col-md-6">
        {!! Form::label('nombre', 'Nombre del producto') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'required']) !!}
    </div>

</div>

<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('idcategoria', 'Categoria') !!}
        {!! Form::select('idcategoria', $categorias, null, ['placeholder' => 'Selecciones una opción', 'class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('precio_venta', 'Precio') !!}
        {!! Form::text('precio_venta', null, ['class' => 'form-control', 'required']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-md-offset-12 text-center">
        <a href="{{ route('productos.index') }}" class="btn btn_cancel">Cancelar</a>
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary', 'id' => 'btn_save_registerUser']) !!}
    </div>
</div>