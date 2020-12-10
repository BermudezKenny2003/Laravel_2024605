<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id', 6);
            $table->integer('numdocumento')->unique();
            $table->string('nombres', 50);
            $table->string('apellidos', 50);
            $table->string('email', 70)->unique();
            $table->string('celular',10);
            $table->text('perfil');
            $table->string('direccion',30); 
            $table->string('barrio', 40);   
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
        Schema::dropIfExists('clientes');
    }
}
