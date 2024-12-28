<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Jury;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class PDFController extends Controller {
    public function generatePDF( $matricule_etud ) {
        $etudiant = Etudiant::join( 'juries', 'etudiants.jury_id', '=', 'juries.num_jury' )
        ->where( 'etudiants.matricule_etud', $matricule_etud )
        ->select( 'etudiants.matricule_etud', 'etudiants.nom_prenom', 'etudiants.theme', 'etudiants.lieu_stage',
        'juries.num_jury', 'juries.president', 'juries.examinateur', 'juries.rapporteur', 'juries.encadreur',
        'juries.entreprise', 'juries.date', 'juries.heure', 'juries.salle' )
        ->distinct()
        ->first();

        // dd( $etudiant->heure );
        $data = [ 'etudiant' => $etudiant ];
        $pdf = PDF::loadView( 'pdf.document', $data );

        return $pdf->download( 'document.pdf' );
    }
}
