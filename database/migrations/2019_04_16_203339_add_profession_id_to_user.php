<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfessionIdToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //$table->dropColumn('profession');
            //agregar clave foranea
            //$table->integer('profession_id')->unsigned();
           // $table->unsignedInteger('profession_id');
            $table->unsignedBigInteger('profession_id');
            $table->foreign('profession_id')->references('id')->on('professions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //$table->dropColumn('profession_id');
            //$table->string('profession',50)->nullable()->after('password');   
            $table->dropForeign(['profession_id']);
           $table->dropColumn('profession_id');    
        });
    }
}
