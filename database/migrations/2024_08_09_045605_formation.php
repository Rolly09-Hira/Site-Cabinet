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
        //
        Schema::create('formation', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('video')->nullable();
            $table->string('pdf')->nullable();
            $table->string('id_matiere');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('formation');
    }
};
