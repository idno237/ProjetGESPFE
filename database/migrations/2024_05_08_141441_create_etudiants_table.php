<?php

use App\Models\Departement;
use App\Models\Jury;
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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string("matricule_etud")->unique()->nullable(false);
            $table->string("nom_prenom")->nullable(false);
            $table->string("theme")->nullable(false);
            $table->string("lieu_stage")->nullable();
            $table->string("entreprise")->nullable();
            $table->foreignIdFor(Jury::class);
            // $table->foreignIdFor(Departement::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
