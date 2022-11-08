<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArbitresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arbitres', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('photo', 255);
            $table->string('nom', 100);
            $table->date('date_nais');
            $table->string('nationalite', 60);
            $table->string('nationalite_en', 60);
            $table->string('lieu_nais', 60);
            $table->string('status');
            $table->date('annee_debut_elite');
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
        Schema::dropIfExists('arbitres');
    }
}
