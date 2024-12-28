<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Parcours extends Model {
    use HasFactory;

    protected $fillable = [
        "id_parcours",
        "nom_parcours",
        "departement_id"
    ];

    // un parcours appartient à un département
    public function departement() : BelongsTo {
        return $this->belongsTo( Departement::class );
    }
}
