<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableMatiereProfesseur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matiere_professeur', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('professeur_id');
            $table->unsignedBigInteger('matiere_id');
            $table->timestamps();
            $table->foreign('professeur_id')->references('id')->on('professeurs');
            $table->foreign('matiere_id')->references('id')->on('matieres');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot_table_matiere_professeur');
    }
}
