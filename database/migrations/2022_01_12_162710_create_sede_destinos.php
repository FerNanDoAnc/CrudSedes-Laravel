<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSedeDestinos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sede_destinos', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->string('idsede',3)->unique()->primary();

            $table->string('ubigeo')->unsigned();
            $table->foreign('ubigeo')->references('ubigeo')->on('ubigeos');

            $table->string('usuariocrea',6);
            
            $table->string('usuariomod',6);

            $table->string('estado',1);
            $table->string('observacion');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sede_destinos');
    }
}
