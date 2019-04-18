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
        //este metodo se ejecuta al colocar en la  consola
        //php artisan DB:seed 
         $this->call(ProfessionSeeder::class);
         //-------------------  PARA LLAMAR A VARIAS CLASES SE PUEDE USAR COMO SIGUE A CONTINUACION
        //  $this->call([
        //     UsersTableSeeder::class,
        //     PostsTableSeeder::class,
        //     CommentsTableSeeder::class,
        // ]);
    }
}
