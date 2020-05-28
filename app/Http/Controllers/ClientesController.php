<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Clientes;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=DB::table('clientes as c')
            ->selectRaw('
                c.id,
                c.nombre,
                c.direccion,
                c.telefono,
                c.email
    
            ')
            ->orderBy('c.id','desc')
            ->paginate(5);

        return view('screen.clientes.index', compact('clientes'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('screen.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
        $cliente= new Clientes();

        $cliente->nombre = $data->nombre;
        $cliente->direccion = $data->direccion;
        $cliente->telefono = $data->telefono;
        $cliente->email = $data->email; 
        
        $cliente->save();

        return redirect()->route('clientes.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = Clientes::find($id);
        
        return view('screen.clientes.show', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = Clientes::find($id);
        return view('screen.clientes.edit', compact('clientes'));
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
        $cliente= clientes::find($id);

        $cliente->nombre = $data->nombre;
        $cliente->direccion = $data->direccion;
        $cliente->telefono = $data->telefono;
        $cliente->email = $data->email;
        $cliente->save();

        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Clientes::destroy($id);
        return redirect()->route('clientes.index');
    }
}
