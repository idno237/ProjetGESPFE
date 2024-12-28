<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEtudiantRequest extends FormRequest {
    /**
    * Determine if the user is authorized to make this request.
    */

    public function authorize(): bool {
        return true;
    }

    /**
    * Get the validation rules that apply to the request.
    *
    * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
    */

    public function rules(): array {
        return [
            'matricule_etud' => ["required", "string"],
            'nom_prenom' => ["required", "string"],
            'theme' => ["required", "string"],
            'lieu_stage' => ["string"],
            'entreprise' => ["string"],
            'jury_id' => ["required", "integer"],
            'departement_id' => ["integer"]
        ];
    }
}
