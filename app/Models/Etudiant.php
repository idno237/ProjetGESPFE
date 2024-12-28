<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Etudiant extends Model {
    use HasFactory;

    protected $fillable = [
        "matricule_etud",
        "nom_prenom",
        "theme",
        "lieu_stage",
        "entreprise",
        "jury_id",
    ];

    // un étudiant appartient à un département
    public function departement() : BelongsTo {
        return $this->belongsTo( Departement::class );
    }

    // un étudiant appartient à un jury
    public function jury() : BelongsTo {
        return $this->belongsTo( Jury::class );
    }

    // un étudiant appatient à plusieurs encadreurs
    public function encadreurs() : BelongsToMany{
        return $this->belongsToMany(Encadreurs::class);
    }

}
