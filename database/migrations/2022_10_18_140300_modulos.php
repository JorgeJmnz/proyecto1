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
        //

        Schema::create('modulos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');

            $table->bigInteger('categoria_id')->unsigned();
            $table->string('nombre', 50);
            $table->longText('descripcion');
            $table->bigInteger('subestacion_id')->unsigned();
            $table->double('lat', 20);
            $table->double('long', 20);
            $table->date('fechaman');
            $table->longText('mantenimiento');
            $table->string('imagen');
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete("cascade");
            $table->foreign('subestacion_id')->references('id')->on('subestaciones')->onDelete("cascade");
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
