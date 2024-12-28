<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EtudiantResource extends JsonResource {
    /**
    * Transform the resource into an array.
    *
    * @return array<string, mixed>
    */

    public function toArray( Request $request ): array {
        return [
            'matricule_etud'=> $this->matricule_etud,
            'nom_prenom' => $this->nom_prenom,
            'theme' => $this->theme,
            'lieu_stage' => $this->lieu_stage,
            'entreprise' => $this->entreprise,
            'jury_id' => $this->jury_id,
            'departement_id' => $this->departement_id
        ];
    }
}
