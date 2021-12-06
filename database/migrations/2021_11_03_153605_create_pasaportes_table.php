<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasaportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasaportes', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->date('emision');
            $table->date('expiracion');
            $table->string('url');
            $table->unsignedBigInteger('pasaporteable_id');
            $table->string('pasaporteable_type');

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
        Schema::dropIfExists('pasaportes');
    }
}
