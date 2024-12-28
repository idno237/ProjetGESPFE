<?php

use App\Models\Enseignant;
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
        Schema::create('interventions', function (Blueprint $table) {
            $table->id();
            $table->string("departement");
            $table->string("grade");
            $table->string("nom_prenom_ens");
            $table->date("date");
            $table->string("prevu_pr");
            $table->string("prevu_ra");
            $table->string("prevu_ex");
            $table->string("effec_pr");
            $table->string("effec_ra");
            $table->string("effec_ex");
            $table->foreignIdFor(Enseignant::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interventions');
    }
};
