@extends('layouts.panaderia')

@section('content')
    <h2 class="section-heading mb-5">
        <span class="section-heading-lower">VER - PRODUCTO</span>
    </h2>

    <br>

    <div class="row">
        <div class="col-md-12">
            {{ $productos }}
        </div>
    </div>
        
    

@endsection