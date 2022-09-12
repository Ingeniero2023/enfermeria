<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnfermeriaTable extends Migration
{
    public function up()
    {
        Schema::create('enfermeria', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->time('hora_de_la_consulta');
            $table->integer('documento');
            $table->string('nombre');
            $table->string('grado');
            $table->integer('edad');
            $table->string('direccion');
            $table->string('eps');
            $table->string('grupo_sanguineo');
            $table->string('rh');
            $table->string('telefono');
            $table->string('nombre_del_padre');
            $table->string('nombre_de_la_madre');
            $table->integer('telefono_del_padre');
            $table->integer('telefono_de_la_madre');
            $table->string('correo_del_padre');
            $table->string('correo_de_la_madre');
            $table->longText('descripcion');
            $table->longText('tratamiento')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
