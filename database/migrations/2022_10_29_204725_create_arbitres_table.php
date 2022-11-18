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
            $table->string('drapeau', 255);
            $table->string('nationalite', 100);
            $table->string('lieu_nais', 100);
            $table->string('status', 100);
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
