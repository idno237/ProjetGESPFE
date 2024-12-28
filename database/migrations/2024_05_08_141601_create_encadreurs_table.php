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
        Schema::create('encadreurs', function (Blueprint $table) {
            $table->id();
            $table->string("encadreur1")->nullable(false);
            $table->string("encadreur2")->nullable(false);
            $table->string("encadreur3")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encadreurs');
    }
};
