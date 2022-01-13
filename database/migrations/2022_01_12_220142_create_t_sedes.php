<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSedes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_sedes', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->integer('codsede')->unsigned()->unique()->primary();
            $table->string('nomsede', 50);

            $table->string('idsede')->unsigned();
            $table->foreign('idsede')->references('idsede')->on('sede_destinos');

            $table->integer('estado')->default(0);
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
        Schema::dropIfExists('t_sedes');
    }
}
