<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultats', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedInteger('saison_id');
            $table->foreign('saison_id')->references('id')->on('saisons')->onDelete('restrict');
            $table->unsignedInteger('competition_id');
            $table->foreign('competition_id')->references('id')->on('competitions')->onDelete('restrict');
            $table->unsignedInteger('journee_id');
            $table->foreign('journee_id')->references('id')->on('journees')->onDelete('restrict');
            $table->unsignedInteger('match_id');
            $table->foreign('match_id')->references('id')->on('matches')->onDelete('restrict');
            $table->unsignedInteger('phase_id');
            $table->foreign('phase_id')->references('id')->on('phases')->onDelete('restrict');
            $table->unsignedInteger('stade_id');
            $table->foreign('stade_id')->references('id')->on('stades')->onDelete('restrict');
            $table->unsignedInteger('club1_id');
            $table->foreign('club1_id')->references('id')->on('clubs')->onDelete('restrict');
            $table->integer('nbre_but_club1');
            $table->unsignedInteger('club2_id');
            $table->foreign('club2_id')->references('id')->on('clubs')->onDelete('restrict');
            $table->integer('nbre_but_club2');
            $table->unsignedInteger('arbitre1_id');
            $table->foreign('arbitre1_id')->references('id')->on('arbitres')->onDelete('restrict');
            $table->unsignedInteger('arbitre2_id');
            $table->foreign('arbitre2_id')->references('id')->on('arbitres')->onDelete('restrict');
            $table->unsignedInteger('arbitre3_id');
            $table->foreign('arbitre3_id')->references('id')->on('arbitres')->onDelete('restrict');
            $table->unsignedInteger('arbitre4_id');
            $table->foreign('arbitre4_id')->references('id')->on('arbitres')->onDelete('restrict');
            $table->date('date');
            $table->string('heure', 100);
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
        Schema::dropIfExists('resultats');
    }
}
