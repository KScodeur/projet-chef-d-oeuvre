<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) 
        {
            $table->id();
            $table->unsignedBigInteger('classe_id');
            $table->string('nom');
            $table->string('prenom');
            $table->enum('sexe',['f','m']);
            $table->date('date-naissance');
            $table->string('lieu_naissance');
            $table->string('nationalité');
            $table->string('nom-pere');
            $table->string('pere-profession');
            $table->string('tel');
            $table->string('nom-mere');
            $table->string('mere-profession');
            $table->string('email');
            $table->timestamps();
            $table->foreign('classe_id')->references('id')->on('classes');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eleves');
    }
}
