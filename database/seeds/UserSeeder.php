<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profesiones=DB::select('select id from professions where title = ?', ["Desarrollador Web"]);
        // dd($profesiones);
        DB::table('users')->insert(
            ['name'=>'Darwin Calva',
            'email'=>'darwin@',
            'password'=>bcrypt('laravel'),
            'profession_id'=>$profesiones[0]->id
            ]
        );
    }
}
