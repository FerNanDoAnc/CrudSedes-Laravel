<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbigeos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubigeos', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->string('ubigeo',6)->unique()->primary();
            $table->string('coddepa', 2);
            $table->string('codprov',2);
            $table->string('codpos',2);
            $table->string('departamento',100);
            $table->string('provincia',100);
            $table->string('distrito',100);
            $table->string('nombre',200);
            $table->integer('flagprov')->default(0);
            $table->string('codpostal',3);
            $table->string('codzona',4);
            $table->string('tipo_zona',2);
            $table->integer('tipo_ofi');
            $table->integer('estado_ubigeo')->default(0);
            $table->string('tipo_zona_sunat',2);
            $table->string('forma_envio',1);
            $table->string('bloq_rural',1);
            $table->string('tipo_veri_camp_sunat',3);
            $table->string('tp_region',3);
            $table->string('tipo_zona_client',2);
            $table->string('tipo_zona_client_sbs',2);
            $table->string('tipo_zona_client_atu',2);
            $table->integer('lead');

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
        Schema::dropIfExists('ubigeos');
    }
}
