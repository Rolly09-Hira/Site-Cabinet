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
        Schema::create('servext', function (Blueprint $table) {
            $table->id();
            $table->string('id_ext')->unique();
            $table->string('nom_ext');
            $table->string('desc_ext');
            $table->string('image_ext');
            $table->string('avantage');
            $table->string('autre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servext');
    }
};
