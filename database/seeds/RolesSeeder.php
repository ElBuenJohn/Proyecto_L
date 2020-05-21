<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // DB::table('roles')->insert([
        // 'titulo'=> 'Administrador',
        //  ]);

        //  DB::table('roles')->insert([
        //     'titulo'=> 'Empleado',
        //      ]);

        DB::table('roles')->insert(array('id'=>'1','titulo'=>'Administrador',));
        DB::table('roles')->insert(array('id'=>'2','titulo'=>'Empleado',));
    }
}
