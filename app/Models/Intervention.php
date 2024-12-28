<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Intervention extends Model {
    use HasFactory;

    protected $fillable = [
        "departement",
        "grade",
        "nom_prenom_ens",
        "date",
        "prevu_pr",
        "prevu_ra",
        "prevu_ex",
        "effec_pr",
        "effec_ra",
        "effec_ex"
    ];

    // dans une intervention, on à plusieurs enseignants
    public function enseignants () : HasMany{
        return $this->hasMany(Enseignant::class);
    }

}
