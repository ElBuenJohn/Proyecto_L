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

    $table->foreign('idproducto'
    $table->foreign('idproveedor',
    $table->string('num_compra', 10);
            $table->integer('cantidad');
            $table->decimal('precio', 11, 2);
            $table->decimal('total

    public function index()
    {
        $productos=DB::table('compras as c')
            ->selectRaw('
                c.id,
                c.idproducto,
                c.idproveedor,
                c.num_compra as numero,
                c.cantidad,
                c.precio, 
                c.total,
            ')
            ->leftJoin('categorias as c','c.idproducto','=','c.id')
            ->leftJoin()
            ->orderBy('p.id','desc')
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
