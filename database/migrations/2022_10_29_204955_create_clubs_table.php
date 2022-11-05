<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('siege', 60);
            $table->string('bp', 60);
            $table->string('telephone', 60);
            $table->string('email', 60);
            $table->string('site', 100);
            $table->string('president', 100);
            $table->string('v_president', 100);
            $table->string('secretaire_g', 100);
            $table->string('coach_p', 100);
            $table->string('coach_ad', 100);
            $table->unsignedInteger('stade_id');
            $table->foreign('stade_id')->references('id')->on('stades')->onDelete('restrict');
            $table->unsignedInteger('boutique_id');
            $table->foreign('boutique_id')->references('id')->on('boutiques')->onDelete('restrict');
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
        Schema::dropIfExists('clubs');
    }
}
