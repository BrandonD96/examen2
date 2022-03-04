<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //crear tabla publicaciones
        Schema::create('publicaciones',function(Blueprint $table){
            $table->id();
            $table->text('titulo');
            $table->text('introduccion');
            $table->text('contenido');
            $table->text('unidad');
            $table->text('link_imagen');
            $table->text('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
