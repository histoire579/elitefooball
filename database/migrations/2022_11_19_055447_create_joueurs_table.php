<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joueurs', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('photo', 255);
            $table->string('nom', 100);
            $table->date('date_nais');
            $table->unsignedInteger('pays_id');
            $table->foreign('pays_id')->references('id')->on('pays')->onDelete('restrict');
            $table->string('lieu_nais', 100);
            $table->integer('taille');
            $table->integer('poids');
            $table->string('pied_fort', 100);
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
        Schema::dropIfExists('joueurs');
    }
}
