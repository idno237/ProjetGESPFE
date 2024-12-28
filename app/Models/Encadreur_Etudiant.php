<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Encadreur_Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        "etudiant_id",
        "encadreurs_id",
    ];

}
