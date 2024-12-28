<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JuryResource extends JsonResource {
    /**
    * Transform the resource into an array.
    *
    * @return array<string, mixed>
    */

    public function toArray( Request $request ): array {
        return [
            'id' => $this->id,
            'president' => $this->president,
            'examinateur' => $this->examinateur,
            'rapporteur' => $this->rapporteur,
            'encadreur' => $this->encadreur,
            'entreprise' => $this->entreprise,
            'date' => $this->date,
            'heure' => $this->heure,
            'etudiant' => $this->etudiants,
            'enseignant'=> $this->enseignants
        ];
    }
}
