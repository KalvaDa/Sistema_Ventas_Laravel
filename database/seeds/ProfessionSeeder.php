<?php

use Illuminate\Database\Seeder;
//se debe importar el siguiente modulo
use Illuminate\Support\Facades\DB;
class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');//No toma en cuenta las llaves foraneas
       // Illuminate\Support\Facades\DB::table('users'); para no importar el modulo se puede usar este
    DB::table('professions')->truncate(); //Elimina los registros de la base de datos, 
    //solo se puede usar cuando no se tiene restricciones de clave foranea
    
    DB::table('professions')->insert(
          ['title'=>'Desarrollador Movil']
      );

      DB::table('professions')->insert(
          ['title'=>'Desarrollador Web']
      );

    }
}
