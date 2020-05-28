{!! Form::token() !!}

<div class="form-row">

    <div class="form-group col-md-6">
        {!! Form::label('nombre', 'Nombre del Cliente') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control','requerid']) !!}
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('direccion', 'Nombre de la direccion') !!}
        {!! Form::text('direccion', null, ['class' => 'form-control','requerid']) !!}
    </div>

</div>

<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('telefono', 'Telefono') !!}
        {!! Form::text('telefono', null, ['class' => 'form-control','requerid']) !!}
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('email', 'email') !!}
        {!! Form::text('email', null, ['class' => 'form-control','requerid']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-md-offset-12 text-center">
        <a href="{{ route('proveedores.index') }}" class="btn btn_cancel">Cancelar</a>
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>
</div>