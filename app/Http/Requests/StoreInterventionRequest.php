<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInterventionRequest extends FormRequest {
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
            'departement'=> ["required", "string"],
            'grade'=> ["required", "string"],
            'nom_prenom_ens'=> ["required", "string"],
            'date'=> ["required", "date"],
            'prevu_pr' => ["integer"],
            'prevu_ra' => ["integer"],
            'prevu_ex' => ["integer"],
            'effec_pr' => ["integer"],
            'effec_ra' => ["integer"],
            'effec_ex' => ["integer"],
        ];
    }
}
