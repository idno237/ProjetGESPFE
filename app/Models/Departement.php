<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departement extends Model {
    use HasFactory;

    protected $fillable = [
        'id_depart',
        'nom_depart'
    ];

    // un département à plusieurs parcours
    public function parcours() : HasMany{
        return $this->hasMany(Parcours::class);
    }

    // un département à plusieurs étudiant
    public function etudiants() : HasMany{
        return $this->hasMany(Etudiant::class);
    }

}
