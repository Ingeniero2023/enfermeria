<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoDeConsultaTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_de_consulta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
