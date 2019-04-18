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

    DB::table('professions')->insert(
          ['title'=>'Desarrollador Movil']
      );

      DB::table('professions')->insert(
          ['title'=>'Desarrollador Web']
      );
      DB::insert('insert into professions (title) values (?)', ['Arquitecto']);
    }
}
