<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compras;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use DB;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $productos=DB::table('compras as c')
            ->selectRaw('
                c.id,
                c.idproducto,
                c.idproveedor,
                c.num_compra,
                c.cantidad,
                c.precio, 
                c.total,
            ')
            ->leftJoin('productos as p','c.idproducto','=','c.id')
            ->leftJoin('proveedores as r','c.idproveedor','=','c.id')
            ->orderBy('p.id','desc')
            ->orderBy('r.id','desc')
            ->paginate(10);

        return view('screen.compras.index', compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = DB::table('productos')
                ->orderBy('nombre', 'asc')
                -> pluck('nombre', 'id');

        $proveedores = DB::table('proveedores')
                ->orderBy('nombre', 'asc')
                -> pluck('nombre', 'id');

        return view('screen.compras.create', compact('productos','proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
        $compra= new Compras();

        $compra->idproducto = $data->idproducto;
        $compra->idproveedor = $data->idproveedor;
        $compra->num_compra = $data->num_compra;
        $compra->cantidad = $data->cantidad;
        $compra->precio= $data->precio;
        $compra->total= $data->total;
        $compra->save();

        return redirect()->route('compras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compras = Compras::find($id);
        return view('screen.compras.show', compact('compras'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compras = Compras::find($id);

        $productos = DB::table('productos')
            ->orderBy('nombre', 'asc')
            -> pluck('nombre', 'id');

        $proveedores = DB::table('proveedores')
            ->orderBy('nombre', 'asc')
            -> pluck('nombre', 'id');

        return view('screen.compras.edit', compact('productos', 'proveedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $compra= new Compras();

        $compra->idproducto = $data->idproducto;
        $compra->idproveedor = $data->idproveedor;
        $compra->num_compra = $data->num_compra;
        $compra->cantidad = $data->cantidad;
        $compra->precio= $data->precio;
        $compra->total= $data->total;
        $compra->save();

        return redirect()->route('compras.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Compras::destroy($id);
        return redirect()->route('compras.index');
    }
}
