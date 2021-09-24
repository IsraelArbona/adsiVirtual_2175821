<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDptosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dptos', function (Blueprint $table) {
            $table->string('id',4)->primary();
            $table->string('nombre',80);
            $table->string('pais_id',3);
            $table->foreign('pais_id')->references('id')->on('pais')->onDelete('cascade');
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
        Schema::dropIfExists('dptos');
    }
}
