<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jury extends Model {
    use HasFactory;

    protected $fillable = [
        "num_jury",
        "president",
        "examinateur",
        "rapporteur",
        "encadreur",
        "entreprise",
        "date",
        "heure",
        "salle"
    ];

    // un jury peu avoir plusieurs étudiants
    public function etudiants() : HasMany{
        return $this->hasMany(Etudiant::class);
    }

    // un jury peu avoir plusieurs enseignants
    public function enseignants() : HasMany{
        return $this->hasMany(Enseignant::class);
    }

}
