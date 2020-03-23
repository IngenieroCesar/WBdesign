<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->datetime('fechaIni');
            $table->datetime('fechaFin')->nullable();
            $table->boolean('todoeldia')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
        });

        //Users & Actividades = users & actividades = user_actividad
        Schema::create('actividad_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actividad_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('actividad_id')->references('id')->on('actividades')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('actividad_user');
        Schema::drop('actividades');
    }
}
