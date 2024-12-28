<?php

namespace App\Exports;

use App\Models\Intervention;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BilanTotal implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $departement = request()->departement; // Récupérer la valeur de la variable département depuis la requête

        return Intervention::selectRaw('nom_prenom_ens' )
        ->selectRaw( 'SUM(effec_pr) as sum_effec_pr, SUM(effec_ra) as sum_effec_ra, SUM(effec_ex) as sum_effec_ex' )
        ->groupBy( 'nom_prenom_ens' )
        ->get();
    }


    public function headings(): array{
        // $departement = request()->departement;
        return [
            "Noms/Prenoms",
            "P",
            "R",
            "E"
        ];
    }
}
