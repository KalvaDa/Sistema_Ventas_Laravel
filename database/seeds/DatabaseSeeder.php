<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->Truncar_Tablas(['professions']);
        //este metodo se ejecuta al colocar en la  consola
        //php artisan DB:seed 
         $this->call(ProfessionSeeder::class);
         $this->call(UserSeeder::class);
         //-------------------  PARA LLAMAR A VARIAS CLASES SE PUEDE USAR COMO SIGUE A CONTINUACION
        //  $this->call([
        //     UsersTableSeeder::class,
        //     PostsTableSeeder::class,
        //     CommentsTableSeeder::class,
        // ]);
    }
    public function Truncar_Tablas(array $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');//No toma en cuenta las llaves foraneas
        // Illuminate\Support\Facades\DB::table('users'); para no importar el modulo se puede usar este
        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate(); //Elimina los registros de la base de datos, 
            //solo se puede usar cuando no se tiene restricciones de clave foranea
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');//Vuelve a tomar en cuenta las llaves foraneas

    }
}
