<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfesionToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //agrega una columna a latabla usuario
        Schema::table('users', function (Blueprint $table) {
            //agregar varchar 50,despues del campo password
            //$table->string('profession',50)->nullable()->after('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Elimina una columna a la tabla usuarios
        Schema::table('users', function (Blueprint $table) {
            //$table->dropColumn('profession');
        });
    }
}
