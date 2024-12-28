<?php

namespace App\Http\Controllers;

use App\Exports\BilanTotal;
use App\Exports\DecompteExport;
use App\Models\Departement;
use App\Models\Enseignant;
use App\Models\Intervention;
use App\Http\Requests\StoreInterventionRequest;
use App\Http\Requests\UpdateInterventionRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class InterventionController extends Controller {
    /**
    * Display a listing of the resource.
    */

    public function index() {
        //return view( 'Interventions.departement.GAM_TAU.jour1.inter_prevu', [ 'intervention', Enseignant::all() ] );
    }

    public function interv_prevu() {
        $intervention_prevu = Enseignant::all();
        $departements = Departement::all();
        return view( 'Interventions.departement.form_inter_prevu', compact( 'intervention_prevu', 'departements' ) );
    }

    public function interv_effect() {
        $decompteJours = Intervention::all();
        return view( 'Interventions.departement.form_inter_effect', compact( 'decompteJours' ) );
    }

    public function bilanInterventionTraitement(Request $request) {
        $departement = Departement::where("nom_depart", $request->departement)->first();

        $departements = Departement::all();

        $interventions = Intervention::selectRaw( 'GROUP_CONCAT(grade) as grade, nom_prenom_ens' )
        ->selectRaw( 'SUM(effec_pr) as sum_effec_pr, SUM(effec_ra) as sum_effec_ra, SUM(effec_ex) as sum_effec_ex' )
        ->where( 'departement', $request->departement )
        ->groupBy( 'nom_prenom_ens' )
        ->get();

        // dd( $interventions );

        return view( 'Interventions.departement.bilan_par_departement', compact( 'interventions', 'departements', 'departement' ) );
    }

    //on regroupe les enseignants en fonction des départements dans lequel ils ont intervenu et on fait le bilan
    // public function bilanTraitement( Request $request ) {

    //     $departement = $request->departement;
    //     $departements = Departement::all();
    //     $interventions = Intervention::selectRaw( 'GROUP_CONCAT(grade) as grade, nom_prenom_ens' )
    //     ->selectRaw( 'SUM(effec_pr) as sum_effec_pr, SUM(effec_ra) as sum_effec_ra, SUM(effec_ex) as sum_effec_ex' )
    //     ->where( 'departement', $request->departement )
    //     ->groupBy( 'nom_prenom_ens' )
    //     ->get();

    //     // dd( $interventions );

    //     return view( 'Interventions.departement.bilan_par_departement', compact( 'interventions', 'departements', 'departement' ) );
    // }

    // permet de modifier les interventions existant prévu

    public function updateProgPrevu( Request $request, $id ) {
        $request->validate( [
            'date' => [ 'date' ],
            'departement'  => [ 'string' ],
            'effec_pr' => [ 'integer' ],
            'effec_ra' => [ 'integer' ],
            'effec_ex' => [ 'integer' ],
        ] );

        // recherche
        $decompteJourResult = Intervention::find( $id );

        if ( $decompteJourResult ) {

            $decompteJourResult->update( [
                'date' => $request->date,
                'departement' => $request->departement,
                'prevu_pr' => $request->prevu_pr,
                'prevu_ra' => $request->prevu_ra,
                'prevu_ex' => $request->prevu_ex,
            ] );

            $intervention_prevu = Intervention::where("departement", $request->departement)->get();

            return view( "Interventions.Departement.updateIntervention", compact("intervention_prevu") );
        } else {
            return [
                'message' => 'invalid !'
            ];
        }

    }

    public function updateDecompteEffectif ( Request $request, $decompteJour ) {
        $request->validate( [
            'effec_pr' => [ 'required', 'integer' ],
            'effec_ra' => [ 'required', 'integer' ],
            'effec_ex' => [ 'required', 'integer' ],
        ] );

        // recherche
        $decompteJourResult = Intervention::find( $decompteJour );
        ;

        if ( $decompteJour ) {
            $decompteJourResult->update( [
                'prevu_pr' => $request->prevu_pr,
                'prevu_ra' => $request->prevu_ra,
                'prevu_ex' => $request->prevu_ex,
                'effec_pr' => $request->effec_pr,
                'effec_ra' => $request->effec_ra,
                'effec_ex' => $request->effec_ex,
            ] );

            return redirect( 'decompte/journalier' );
        } else {
            return [
                'message' => 'invalid !'
            ];
        }

    }
    /**
    * Show the form for creating a new resource.
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( Request $request ) {
        $validated = $request->validate( [
            'departement' => [ 'required', 'string' ],
            'nom_prenom_ens' => [ 'required', 'string' ],
            'date' => [ 'required', 'date' ],
            'prevu_pr' => [ 'required', 'integer' ],
            'prevu_ra' => [ 'required', 'integer' ],
            'prevu_ex' => [ 'required', 'integer' ],
        ] );

        if ( $validated ) {
            try {
                $EnseignantDateExist = Intervention:: where( 'date', $request->date )
                ->where( 'nom_prenom_ens', $request->nom_prenom_ens )->exists();
// dd([
//                         'departement' => $request->departement,
//                             // 'grade' => $request->grade,
//                             'nom_prenom_ens' => $request->nom_prenom_ens,
//                             'date' => $request->date,
//                             'prevu_pr' => $request->prevu_pr,
//                             'prevu_ra' => $request->prevu_ra,
//                             'prevu_ex' => $request->prevu_ex
//                     ]);
                if ( !$EnseignantDateExist ) {
                    Intervention::create( [
                        'departement' => $request->departement,
                        'nom_prenom_ens' => $request->nom_prenom_ens,
                        'date' => $request->date,
                        'prevu_pr' => $request->prevu_pr,
                        'prevu_ra' => $request->prevu_ra,
                        'prevu_ex' => $request->prevu_ex
                    ] );
                    return redirect( 'creation/decompte_prevu' );
                } else {
                    return redirect( 'creation/decompte_prevu' );
                }
            } catch( Exception $e ) {

            }
        } else {
            return [ 'messageError' => 'Données invalide' ];
        }

    }

    public function update_decompte_prevue(Request $request) {

        $intervention_prevu = Intervention::where("departement", $request->departement)->get();
        return view( 'Interventions.Departement.updateIntervention', compact( 'intervention_prevu' ) );
    }

    public function form_update_decompte_prevue( $id ) {

        $interventionRequest = Intervention::find( $id );
        $departements = Departement::all();
        return view( 'Interventions.Departement.form_updateIntervention', compact( 'interventionRequest', 'departements' ) );
    }

    /**
    * Display the specified resource.
    */

    public function show( Intervention $intervention ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( Intervention $intervention ) {

    }

    /**
    * Update the specified resource in storage.
    */

    public function updateDecomptePrevu( Request $request, $intervention ) {

        $request->validate( [
            'prevu_pr' => [ 'required', 'integer' ],
            'prevu_ra' => [ 'required', 'integer' ],
            'prevu_ex' => [ 'required', 'integer' ],
        ] );

        $EnseignantUpdate = Intervention::find( $intervention );

        if ( $EnseignantUpdate ) {
            $EnseignantUpdate->update( [
                'prevu_pr' => $request->prevu_pr,
                'prevu_ra' => $request->prevu_ra,
                'prevu_ex' => $request->prevu_ex
            ] );
            return view( 'Interventions.departement.form_inter_prevu' )->with( [ 'messageError' => 'Modifier avec Succès!' ] );
        } else {
            return [ 'messageError' => 'Echec de modification' ];
        }

    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( Intervention $intervention ) {
        //
    }


    public function fileExport(){
        return Excel::download(new DecompteExport, request()->departement.'.xlsx');
    }
    public function BilanTotalExport(){
        return Excel::download(new BilanTotal, 'EtatService.xlsx');
    }

    public function choixDepartement(){
        $departements = Departement::all();
        return view("Departement.ChoixDepartement", compact("departements"));
    }

    public function choix_bilan_interventionDepartement(){
        $departements = Departement::all();
        return view( "Departement.Choix_Bilan_Intervention", compact("departements"));
    }
}
