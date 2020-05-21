<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'roles',
            'categorias',
        ]);
       
        // $this->call(UsersTableSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(CategoriasSeeder::class);

    }

    protected function truncateTables(array $tables)
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach($tables as $table){
        DB::table($table)->truncate();
        }
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

    }
}
