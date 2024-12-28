<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Enseignant extends Model {
    use HasFactory;

    protected $fillable = [
        "matricule_ens",
        "nom_prenom_ens",
        "grade",
        "jury_id"
    ];

    // un enseignant appartient à un jury
    public function jury() : BelongsTo {
        return $this->belongsTo( Jury::class );
    }

    // un enseignant ne peut participer qu'a une seul intervention à la fois
    public function intervention() : BelongsTo {
        return $this->belongsTo( Intervention::class );
    }
}
