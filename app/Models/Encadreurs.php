<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Encadreurs extends Model {
    use HasFactory;

    protected $fillable = [
        "encadreur1",
        "encadreur2",
        "encadreur3",
    ];

    //un encadreur appartient à plusieurs étudiant
    public function etudiants() : BelongsToMany{
        return $this->belongsToMany(Etudiant::class);
    }

}
