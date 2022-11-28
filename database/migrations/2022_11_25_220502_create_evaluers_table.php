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
        Schema::create('evaluers', function (Blueprint $table) {
            $table->id();
            $table->date('date_debut');
            $table->date('date_fin');
            $table->integer('prime_t');
            //$table->integer('mat_e')->unsigned();
            $table->foreignId('etudiant_id');
            //$table->integer('num_e')->unsigned();
            $table->foreignId('entreprise_id');
           // $table->integer('user_id')->unsigned();
            $table->foreignId('user_id');

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
        Schema::dropIfExists('evaluers');
    }
};
