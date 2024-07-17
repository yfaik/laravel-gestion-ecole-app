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
        Schema::create('participations', function (Blueprint $table) {
            $table->unsignedBigInteger('id_activite');
            $table->foreign('id_activite')->references('id')->on('activtes');
            $table->unsignedBigInteger('id_eleve');
            $table->foreign('id_eleve')->references('id')->on('eleves');
            $table->primary(['id_eleve','id_activite']);
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
        Schema::dropIfExists('participations');

    }
};
