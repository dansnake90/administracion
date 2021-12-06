<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTallaUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talla_user', function (Blueprint $table) {
   
            $table->integer('tallaropa_id')->nullable();
            $table->integer('tallazapatilla_id')->nullable();
            $table->integer('tallacalzado_id')->nullable();
            $table->integer('tallacamisa_id')->nullable();
            $table->integer('tallapantalon_id')->nullable();
            $table->integer('tallaChaqueta_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('talla_user');
    }
}
