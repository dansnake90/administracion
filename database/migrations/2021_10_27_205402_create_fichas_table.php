<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id')->unique();
            $table->unsignedBigInteger('federacion_id')->nullable();
            $table->foreign('federacion_id')->references('id')->on('federaciones');
            $table->string('otra_federacion', 100)->nullable();
            $table->integer('disciplina_id')->nullable();
            $table->string('club', 200)->nullable();
            $table->string('p_nombre', 50)->nullable();
            $table->string('s_nombre', 100)->nullable();
            $table->string('ape_paterno', 50)->nullable();
            $table->string('ape_materno', 50)->nullable();
            $table->string('nom_preferido', 50)->nullable();
            $table->string('ape_preferido', 50)->nullable();
            $table->integer('genero_id')->nullable();
            $table->date('fecha_naci')->nullable();
            $table->integer('grupo_id')->nullable();
            $table->integer('nacionalidad_pais_id')->nullable();
            $table->integer('nacimiento_cuidad_id')->nullable();
            $table->string('fijo', 15)->nullable();
            $table->string('celular', 15)->nullable();
            $table->integer('resi_pais_id')->nullable();
            $table->integer('resi_region_id')->nullable();
            $table->integer('resi_ciudad_id')->nullable();
            $table->integer('resi_comuna_id')->nullable();
            $table->string('direccion', 150)->nullable();
            $table->integer('estatura_id')->nullable();
            $table->integer('peso_id')->nullable();
            $table->string('madre', 200)->nullable();
            $table->string('madre_fallecida', 2)->nullable();
            $table->string('padre', 200)->nullable();
            $table->string('padre_fallecido', 2)->nullable();
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
        Schema::dropIfExists('fichas');
    }
}
