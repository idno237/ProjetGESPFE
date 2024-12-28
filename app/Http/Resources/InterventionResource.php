<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InterventionResource extends JsonResource {
    /**
    * Transform the resource into an array.
    *
    * @return array<string, mixed>
    */

    public function toArray( Request $request ): array {
        return [
            "id" => $this->id,
            'departement' => $this->departement,
            'grade' => $this->grade,
            'nom_prenom_ens' => $this->nom_prenom_ens,
            'date' => $this->date,
            'prevu_pr' => $this->prevu_pr,
            'prevu_ra' => $this->prevu_ra,
            'prevu_ex' => $this->prevu_ex,
            'effec_pr' => $this->effec_pr,
            'effec_ra' => $this-> effec_ra,
            'effec_ex'=> $this->effec_ex,
            "enseignant"=> $this->enseignants
        ];
    }
}
