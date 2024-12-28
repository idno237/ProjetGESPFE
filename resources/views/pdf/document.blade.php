<!DOCTYPE html>
<html>

<head>
    <title>Fiche de Notation</title>
</head>

<style>
    .en-tete {
        font-size: 10px;
    }

    .text-body {
        font-size: 11px
    }

    .entete-titre {
        font-size: 6px;
        text-align: center;
        font-weight: bold
    }

    .entete-sous-titre {
        font-size: 8px;
        text-align: center;
    } 
</style>

<body>

        <table class="table-responsive" style="width: 100%">
            <tbody>
                <tr>
                    <td>
                        <img src="{{ storage_path('app/public/pictures/en-tete-univ.png') }}" alt=""
                        style="width: 100%; height: 10rem">
                    </td>
                </tr>
                {{-- <tr>
                    <td rowspan="14">
                        <img src="{{ storage_path('app/public/pictures/Logo_de_Université_de_Douala.jpg') }}" alt=""
                            width="60" height="60">
                    </td>
                    <td class="entete-titre">REPUBLIQUE DU CAMEROUN</td>
                    <td class="entete-titre bg-primary">REPUBLIC OF CAMEROON</td>
                    <td rowspan="14">
                        <img src="{{ storage_path('app/public/pictures/Logo_polytech.jpg') }}" alt=""
                            width="60" height="60">
                    </td>
                </tr>
                <tr>
                    <td class="entete-sous-titre">Paix-Travail-Patrie</td>
                    <td class="entete-sous-titre">Peace-Work-Fatherland</td>
                </tr>
                <tr>
                    <td class="entete-sous-titre">**********</td>
                    <td class="entete-sous-titre">**********</td>
                </tr>
                <tr>
                    <td class="entete-titre">UNIVERSITE DE DOUALA</td>
                    <td class="entete-titre">THE UNIVERSITY OF DOUALA</td>
                </tr>
                <tr>
                    <td class="entete-sous-titre">**********</td>
                    <td class="entete-sous-titre">**********</td>
                </tr>
                <tr>
                    <td class="entete-titre">ECOLE NATIONALE SUPERIEURE POLYTECHNIQUE<br>DE DOUALA</br></td>
                    <td class="entete-titre">NATIONAL HIGHER POLYTECHNIC SCHOOL OF <br> DOUALA</td>
                </tr>
                <tr>
                    <td class="entete-sous-titre">**********</td>
                    <td class="entete-sous-titre">**********</td>
                </tr>
                <tr>
                    <td class="entete-titre">DIVISION DES AFFAIRES ACADEMIQUES DE LA <br> RECHERCHE ET DE LA
                        COOPERATION</td>
                    <td class="entete-titre">DIVISION OF ACADEMIC AFFAIRS, RESEARCH AND <br>COOPERATION</td>
                </tr>
                <tr>
                    <td class="entete-sous-titre">**********</td>
                    <td class="entete-sous-titre">**********</td>
                </tr>

                <tr>
                    <td class="entete-titre">SERVICE DU PERSONNEL ENSEIGNANT ET DES <br> ACTIVITES ACADEMIQUES</td>
                    <td class="entete-titre">SERVICE FOR TEACHING STAFF AND ACADEMIC <br> ACTIVITIES</td>
                </tr>
                <tr>
                    <td class="entete-sous-titre">**********</td>
                    <td class="entete-sous-titre">**********</td>
                </tr>
                <tr>
                    <td class="entete-sous-titre">B.P. 2701 Douala</td>
                    <td class="entete-sous-titre">P.O. 2701 Douala</td>
                </tr>
                <tr>
                    <td class="entete-sous-titre">Tél (237) 697 542 240</td>
                    <td class="entete-sous-titre">Phone (237) 697 542 240</td>
                </tr>
                <tr>
                    <td class="entete-sous-titre">Site web : www.enspd-udo.cm</td>
                    <td class="entete-sous-titre">Email : contact@enspd-udo.cm</td>
                </tr> --}}
            </tbody>
        </table>
    <h5 style="text-align: center">FICHE DE NOTATION ET DE SOUTENANCE DU MEMOIRE</h5>

    <div>
        <table style="width: 100%">
            <tbody>
                <tr>
                    <td class="en-tete"><span style="font-weight: bold">Date : </span>{{ $etudiant->date }} </td>
                    <td class="en-tete"><span style="font-weight: bold">Heure : </span>{{ $etudiant->heure }}</td>
                    <td class="en-tete"><span style="font-weight: bold">Salle : </span>{{ $etudiant->salle }}</td>
                    <td class="en-tete"><span style="font-weight: bold">Matricule : </span>{{ $etudiant->matricule_etud }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- nom et prenom --}}

    <div>
        <table style="width: 100%">
            <tbody>
                <tr>
                    <td class="en-tete"><span style="font-weight: bold">Nom(s) et prénom(s) de l'étudiant : </span>{{ $etudiant->nom_prenom }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    {{-- Département et parcours --}}

    <div>
        <table style="width: 70%">
            <tbody>
                <tr>
                    <td class="en-tete text-nowrap"><span style="font-weight: bold">Département : </span></td>
                    <td class="en-tete text-nowrap" style="text-align: left"><span style="font-weight: bold">Parcours : </span></td>
                </tr>
                <tr>
                    <td class="en-tete text-nowrap"><span style="font-weight: bold">Lieu de stage : </span>{{ $etudiant->lieu_stage }}</td>
                    <td class="en-tete text-nowrap"><span style="font-weight: bold">Entreprise : </span>{{ $etudiant->entreprise }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <table style="width: 100%">
            <tbody>
                <tr>
                    <td class="en-tete"><span style="font-weight: bold">Sujet : </span>{{ $etudiant->theme }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div>
        <div
            style="text-decoration: underline; text-align : center; margin : 1rem 0 0.5rem; font-size : 0.7rem; font-weight : bold">
            NOTATION DE LA SOUTENANCE
        </div>
    </div>
    <div>
        <table border="1" style="border-collapse: collapse; width:100%">

            <tr>
                <td rowspan="3" class="text-body">Note sur la forme (30pts)</td>
                <td class="text-body">Exposé : Qualité d'expression et de communication</td>
                <td class="text-body" style="width: 10%; text-align:right">/10</td>
            </tr>
            <tr>
                <td class="text-nowrap w-90 text-body">Exposé : Qualité de la présentation orale</td>
                <td class="text-body" style="width: 10%; text-align:right">/10</td>
            </tr>
            <tr>
                <td class="text-body">Personnalité du candidat</td>
                <td class="text-body" style="width: 10%; text-align:right">/10</td>
            </tr>
            <!-- -->
            <tr>
                <td rowspan="2" class="align-top text-body">Note sur le fond (40pts)</td>
                <td class="text-body">Présentation des résultats obtenus</td>
                <td class="text-body" style="width: 10%; text-align:right">/10</td>
            </tr>
            <tr>
                <td class="text-nowrap w-90 text-body">Compréhension et métrise technique du sujet, capacité à répondre
                    aux
                    questions
                </td>
                <td class="text-body" style="width: 10%; text-align:right">/30</td>
            </tr>
            <tr>
                <td colspan="2" class="text-nowrap w-90 text-body">conformité de mise en stage</td>
                <td class="text-body" style="width: 10%; text-align:right">/5</td>
            </tr>
            <tr>
                <td colspan="2" class="text-nowrap w-90 text-body">Dépot de mémoire en règle</td>
                <td class="text-body" style="width: 10%; text-align:right">/5</td>
            </tr>
            <tr>
                <td colspan="2" class="text-nowrap w-90 text-body">TOTAL sur 80</td>
                <td class="text-body" style="width: 10%; text-align:right">/80</td>
            </tr>
            <tr>
                <td colspan="2" class="text-nowrap w-90 text-body">TOTAL sur 20</td>
                <td class="text-body" style="width: 10%; text-align:right"> /20</td>
            </tr>
        </table>
    </div>
    <div>
        <div class="d-flex align-items-center justify-content-around">
            <div class="text-nowrap text-body" style="margin: 1rem 0 1rem; font-weight : bold">Remarques sur la soutenance : </div>
            <hr class="w-100">
        </div>
        <div>
            <hr class="w-100 mb-5">
        </div>
    </div>

    <div>
        <div
            style="text-decoration: underline; text-align : center; margin-bottom: 0.5rem; font-size: 0.7rem; font-weight : bold">
            NOTATION DU MEMOIRE</div>
        <div class="text-nowrap text-body">
            <span style="text-decoration: underline; font-weight:bold">NB</span>
            <i style="font-weight: bold">Les encadreurs écoles et industriels ne
                sont pas autorisés à donner une note d'évaluation pour le mémoire</i>
        </div>
    </div>
    <div>
        <table border="1" style="border-collapse: collapse; width:100%">
            <thead>
                <tr>
                    <th></th>
                    <th class="text-body">Critères d'évaluation</th>
                    <th class="text-body">Note attribuée</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td class="text-body">FORME </td>
                    <td style="width: 100%" class="text-body">
                        <span>- Effort de présentation <br></span>
                        <span>- Rédaction proprement dite comprenant : accentuation, ponctuation<br>orthographe
                            grammaticale, orthographe d'usage, vocabulaire, syntaxe et plan</span>
                    </td>
                    <td style="width: 10%; text-align:right" class="text-body">/20</td>
                </tr>
                <tr>
                    <td class="text-body">FOND </td>
                    <td class="text-body">
                        <span>- Problématique, Méthode scientifiques utilisées<br>
                            - Plan suivi, Exploitation des résultats, Efficacité de la solution</span>
                    </td>
                    <td style="width: 10%; text-align:right" class="text-body">/30</td>
                </tr>
                <tr>
                    <td class="text-body">TOTAL</td>
                    <td></td>
                    <td style="width: 10%; text-align:right" class="text-body">/50</td>
                </tr>
                <tr>
                    <td class="text-nowrap text-body">MOYENNE</td>
                    <td></td>
                    <td style="width: 10%; text-align:right" class="text-body">/50</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div>
        <div style="text-decoration: underline; text-align : center; margin : 0.5rem 0 .5rem 0; font-size : 0.8rem; font-weight : bold">Membres du Jury :</div>
    </div>

    <div>

        <table border="1" style="width: 100%; border-collapse: collapse">
            <thead>
                <tr>
                    <th></th>
                    <th class="text-body">Président</th>
                    <th class="text-body">Examinateur</th>
                    <th class="text-body">Rapporteur</th>
                    <th class="text-body">Encadreur/<br>Entreprise</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="font-size: 0.7rem">NOM</td>
                    <td class="text-body" style="text-align: center">{{ $etudiant->president }}</td>
                    <td class="text-body" style="text-align: center">{{ $etudiant->examinateur }}</td>
                    <td class="text-body" style="text-align: center">{{ $etudiant->rapporteur }}</td>
                    <td></td>
                </tr>
                <tr>
                    <td style="font-size: 0.7rem">SIGNATURE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <div class="d-flex align-items-center justify-content-around">
            <p class="text-nowrap text-body" style="font-weight : bold">Remarques sur le mémoire : </p>
            <hr class="w-100">
        </div>
        <div>
            <hr class="w-100 mb-5">
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-center text-center">
        <p class="text-nowrap text-body">MENTION : </p>
        <hr class="w-50">
    </div>

</body>

</html>
