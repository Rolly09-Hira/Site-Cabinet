<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('externalisation', function (Blueprint $table) {
            $table->id();
            $table->string('matricule')->nullable();
            $table->string('commmercial');
            $table->string('nomentreprise');
            $table->string('nomclient');
            $table->string('activites');
            $table->string('contact');
            $table->string('mail');
            $table->string('fb');
            $table->string('adresse');
            $table->string('dureexistence');
            $table->integer('nombrepersonnel');
            $table->integer('chiffreaffaire');
            $table->string('regime');
            $table->string('statjur');
            $table->string('Domaine');
            $table->string('servicesouhaiter');
            $table->string('dureesouhaiter');
            $table->string('observation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('externalisation');
    }
};
