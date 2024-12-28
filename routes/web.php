<?php

use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\InterventionController;
use App\Http\Controllers\JuryController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get("/", [AcceuilController::class, "index"])->name("accueil");

//tableau de création des interventions
Route::get('creation/decompte_prevu', [InterventionController::class, "interv_prevu"])->name("creation.decompte_prevu");

// affiche du tableau pour mise à jour des interventions en fin de soiré
Route::get('decompte/journalier', [InterventionController::class, "interv_effect"])->name("decompte.journalier");

// la modification d'un décompte doit se faire par département.
Route::get('choix/departement', [InterventionController::class, "choixDepartement"])->name("choix.departement");
Route::post('choix/departementTraitement', [InterventionController::class, "update_decompte_prevue"])->name("choix.departementTraitement");

// affichage de la liste des interventions prévue
Route::get('update/decompte_prevu', [InterventionController::class, "update_decompte_prevue"])->name("update.decompte_prevu");

// formulaire pré rempli pour modification d'une intervention updateProgPrevu
Route::get('form/update_decompte/{intervention}', [InterventionController::class, "form_update_decompte_prevue"])->name("form.update.decompte.prevu");

// permet de modifier les données d'une intervention
Route::post('updateIntervention/{intervention}', [InterventionController::class, "updateProgPrevu"])->name("update.intervention");

// tableau de création des interventions
Route::post('departement/save', [InterventionController::class, "store"])->name("decompte.save.jour");

// tableau de mise à jour des decompte en fin de soirée
Route::post('update/decompte_effectif/{decompteJour}', [InterventionController::class, "updateDecompteEffectif"])->name("udateDecompte.journalier");


// Route::post('update/decompte_prevu/{intervention}', [InterventionController::class, "updateDecomptePrevu"])->name("udateDecompte.prevu");


Route::get('departement/choix_bilan_interventionDepartement', [InterventionController::class, "choix_bilan_interventionDepartement"])->name("choix.departement.bilan");

// Route::get('departement/bilan_intervention', [InterventionController::class, "bilan"])->name("departement.bilan_intervention");

// bilan des interventions par département
Route::post('departement/bilan_interventionTraitement', [InterventionController::class, "bilanInterventionTraitement"])->name("departement.bilan_intervention");

Route::post('departement/bilan', [InterventionController::class, "bilanTraitement"])->name("departement.bilan");

// exportation du fichier en csv
Route::post('file-export', [InterventionController::class, "fileExport"])->name("file.export");

Route::post('BilanTotal-export', [InterventionController::class, "BilanTotalExport"])->name("BilanTotal.export");

Route::post('/file-import', [JuryController::class, "fileImport"])->name("file.import");

Route::post('import', [JuryController::class, "Import"])->name("file.import");
// Route::get('/intervention_prevu/departement', [InterventionController::class, "intervention_prevu"]);
//

// Route::get('/intervention_effect/departement', [InterventionController::class, "intervention_effectif"]);

// interface d'importation des jurys
Route::get('importer/jury', [JuryController::class, 'importerJury'])->name("importer.jury");

Route::post('/generate-pdf/{matricule_etud}', [PDFController::class, 'generatePDF'])->name("generate.pdf");

// générer liste la liste des jurys

// Route::post('/generate-listeJury-pdf}', [PDFController::class, 'generatePDF'])->name("generate.pdf");

Route::get("/fiche-notation", function(){
    return view("FicheAnnotation.FicheAnnotation");
});

// select nom_prenom_ens, departement, sum(prevu_pr), sum(prevu_ra), sum(prevu_ex), sum(effec_pr), sum(effec_ra), sum(effec_ex) from interventions WHERE departement = "genie logiciel" GROUP BY nom_prenom_ens;
// select nom_prenom_ens, departement, sum(effec_pr), sum(effec_ra), sum(effec_ex) from interventions WHERE departement = "genie logiciel"  GROUP BY nom_prenom_ens ORDER by nom_prenom_ens;

Route::get("Jury/creer-jury", [JuryController::class, "creer_jury"])->name("creer.jury");
