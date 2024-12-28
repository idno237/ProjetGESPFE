<?php

use App\Models\Encadreurs;
use App\Models\Etudiant;
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
        Schema::create('encadreur__etudiants', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Etudiant::class);
            $table->foreignIdFor(Encadreurs::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encadreur__etudiants');
    }
};
