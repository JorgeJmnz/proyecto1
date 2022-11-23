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
        Schema::create('inventarios', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('modulo_id')->unsigned();
            $table->string('Panel', 20);
            $table->string('Puertopanel', 20);
            $table->string('Distancia', 20);
            $table->string('Ubicacion', 100);
            $table->timestamps();

            $table->foreign('modulo_id')->references('id')->on('modulos')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventarios');
    }
};
