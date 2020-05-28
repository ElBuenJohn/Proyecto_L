<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade as PDF;
use DB;



class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $productos=DB::table('productos as p')
            ->selectRaw('
                p.id,
                p.idcategoria,
                p.nombre,
                p.precio_venta as precio,
                p.codigo,
                c.nombre as categoria,
                p.condicion
            ')
            ->leftJoin('categorias as c','p.idcategoria','=','c.id')
            ->orderBy('p.id','desc')
            ->paginate(10);

        return view('screen.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = DB::table('categorias')
                ->orderBy('nombre', 'asc')
                -> pluck('nombre', 'id');

        return view('screen.productos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $data
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
        $producto= new Producto();

        $producto->idcategoria = $data->idcategoria;
        $producto->codigo = $data->codigo;
        $producto->nombre = $data->nombre;
        $producto->precio_venta = $data->precio_venta;
        $producto->stock = '0';
        $producto->condicion = '1';
        $producto->save();

        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Producto::find($id);
        $productos = response()->json(['data' => $data]);
        
        return view('screen.productos.show', compact('productos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $productos = Producto::find($id);

        $categorias = DB::table('categorias')
            ->orderBy('nombre', 'asc')
            -> pluck('nombre', 'id');

        return view('screen.productos.edit', compact('productos', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $data
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $data, $id)
    {
        $producto = Producto::find($id);

        $producto->idcategoria = $data->idcategoria;
        $producto->codigo = $data->codigo;
        $producto->nombre = $data->nombre;
        $producto->precio_venta = $data->precio_venta;
        $producto->stock = '0';
        $producto->condicion = '1';
        $producto->save();

        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Producto::destroy($id);
        return redirect()->route('productos.index');
    }

    public function exportPdf()
    {
        $productos = Producto::get();
        $pdf = PDF::loadView('pdf.productos', compact('productos'));
        return $pdf->download('productos-list.pdf');
    }

}