<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeuilleMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feuille_matches', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedInteger('match_id');
            $table->foreign('match_id')->references('id')->on('matches')->onDelete('restrict');
            $table->unsignedInteger('club1_id');
            $table->unsignedInteger('club2_id');
            $table->foreign('club1_id')->references('id')->on('clubs')->onDelete('restrict');
            $table->foreign('club2_id')->references('id')->on('clubs')->onDelete('restrict');
            $table->text('equipe_club1');
            $table->text('equipe_club2');
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
        Schema::dropIfExists('feuille_matches');
    }
}
