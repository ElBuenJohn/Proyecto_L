<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(array('id'=>'1','nombre'=>'Pan',));
        DB::table('categorias')->insert(array('id'=>'2','nombre'=>'Reposteria',));
        DB::table('categorias')->insert(array('id'=>'3','nombre'=>'Lacteos',)); 
    }
}
