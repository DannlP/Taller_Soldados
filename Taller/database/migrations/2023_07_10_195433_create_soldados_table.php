<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoldadosTable extends Migration
{
    public function up()
    {
        Schema::create('soldados', function (Blueprint $table) {
            $table->string('Cod_s')->primary();
            $table->string('Nom_s');
            $table->string('Apell_s');
            $table->string('Grado_s');
            $table->unsignedBigInteger('Cod_ce1');
            $table->unsignedBigInteger('Num_com1');
            $table->unsignedBigInteger('Cod_c2');
            
            $table->foreign('Cod_ce1')->references('id')->on('cuerpos_ejercito');
            $table->foreign('Num_com1')->references('id')->on('companias');
            $table->foreign('Cod_c2')->references('id')->on('cuarteles');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('soldados');
    }
}
