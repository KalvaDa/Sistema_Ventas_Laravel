<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //FORMA 1
        //$profesiones=DB::select('select id from professions where title = ?', ['Desarrollador Web']);
        //USANDO LARAVEL
        //$profesiones=DB::table('professions')->select('id')->take(1)->get();
        //$primer_resultado=DB::table('professions')->select('id')->first();
        $primer_resultado=DB::table('professions')->select('id')->where('title','=','Desarrollador Web')->first();
        //$primer_resultado=DB::table('professions')->select('id')->where('title','=','Desarrollador Web')->first();
        //'profession_id'=> DB::table('professions')->whereTitle('Desarrollador Back-end')->value('id')
        //$profesion_id=DB::table('professions')->where(['title'=>'Desarrollador Web'])->value('id');


        //dd($profesiones->first()->id);
        //dd($profesiones[0]->id);
        //dd($primer_resultado->id);
        DB::table('users')->insert(
            ['name'=>'Darwin Calva',
            'email'=>'darwin@',
            'password'=>bcrypt('laravel'),
           'profession_id'=>$primer_resultado->id,
           //'profession_id'=> DB::table('professions')->whereTitle('Desarrollador Web')->value('id')
            ]
        );
    }
}
