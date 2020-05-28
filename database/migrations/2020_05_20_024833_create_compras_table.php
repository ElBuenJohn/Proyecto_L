<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idproveedor')->unsigned();
            $table->foreign('idproveedor','fk_proveedor_id')->references('id')->on('proveedores')
            -> onDelete('restrict')
            -> onUpdate('restrict');
            $table->integer('idproducto')->unsigned();
            $table->foreign('idproducto','fk_productos_id')->references('id')->on('productos')
            -> onDelete('restrict')
            -> onUpdate('restrict');
            $table->string('nombre', 35);
            $table->string('num_compra', 10);
            $table->integer('cantidad');
            $table->decimal('precio', 11, 2);
            $table->decimal('total', 11, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
        $table->dropForeign(['idproveedor']);
        $table->dropColum(['idproveedor']);
        $table->dropForeign(['idproducto']);
        $table->dropColum(['idproducto']);
    }
}
