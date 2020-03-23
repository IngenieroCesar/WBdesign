<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nit');
            $table->string('name');
            $table->string('empresa');
            $table->string('address');
            $table->string('city');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('mobile')->unique();
            $table->enum('type', ['cliente','proveedor'])->default('cliente');
            $table->rememberToken();
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
        Schema::drop('clients');
    }
}
