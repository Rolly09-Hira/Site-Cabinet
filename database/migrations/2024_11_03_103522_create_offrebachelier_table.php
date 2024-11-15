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
        Schema::create('offrebachelier', function (Blueprint $table) {
            $table->id();
            $table->string('idform');
            $table->string('nomform');
            $table->string('descform');
            $table->string('imageform');
            $table->string('avantageform');
            $table->string('autreform');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offrebachelier');
    }
};
