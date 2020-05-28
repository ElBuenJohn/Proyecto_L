<?php

namespace App\Http\Controllers;

use App\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['proveedores'] = Proveedores::paginate(5);
        return view('screen.proveedores.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('screen.proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
       
        $provedor= new Proveedores();

        $provedor->nombre = $data->nombre;
        $provedor->direccion = $data->direccion;
        $provedor->telefono = $data->telefono;
        $provedor->email = $data->email;
    
        $provedor->save();

        return redirect()->route('proveedores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provedor= Proveedores::find($id);
        return view('screen.proveedores.edit',compact('provedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $data, $id)
    {
        $provedor= Proveedores::find($id);

        $provedor->nombre = $data->nombre;
        $provedor->direccion = $data->direccion;
        $provedor->telefono = $data->telefono;
        $provedor->email = $data->email;
        $provedor->save();

        return redirect()->route('proveedores.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proveedores::destroy($id);
        return redirect('proveedores');
    }
}
