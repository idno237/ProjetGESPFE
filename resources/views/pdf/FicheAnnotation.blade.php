@extends('template')

@section('title', 'FICHE NOTATION')

@section('content')

    {{-- <div class="row">
        <div class="col text-center">
            <img src="../../images/logo.jpg" alt="Logo Universite" />
        </div>
    </div> --}}

    <h5 class="text-center fw-bold">FICHE DE NOTATION ET DE SOUTENANCE DU MEMOIRE</h5>

    <div class="d-flex align-items-center justify-content-between">
        <div>Date : </div>
        <div>Heure : </div>
        <div>Salle : </div>
        <div>Matricule : </div>
    </div>
    <div class="d-flex align-items-center justify-content-around">
        <p class="text-nowrap me-2">Nom(s) et prénom(s) de l'étudiant : </p>
        <hr class="w-100">
    </div>
    <div class="d-flex align-items-center justify-content-around">
        <p class="text-nowrap me-5">Département : </p>
        <p>Parcours</p>
        <hr class="w-100">
    </div>
    <div class="d-flex align-items-center justify-content-around">
        <p class="text-nowrap me-2">Lieu de stage : </p>
        <hr class="w-50 me-2">
        <p class="text-nowrap me-2">Entreprise : </p>
        <hr class="w-50">
    </div>
    <div>
        <div class="d-flex align-items-center justify-content-around">
            <p class="text-nowrap me-2">Sujet : </p>
            <hr class="w-100">
        </div>
        <div>
            <hr class="w-100 mb-5">
            <hr class="w-100">
        </div>
    </div>
    <div>
        <div class="text-center mt-5" style="text-decoration: underline;">NOTATION DE LA SOUTENANCE</div>
    </div>
    <div>
        <table class="table table-bordered" >
            <tr>
            <tr class="">

            <tr>
                <td rowspan="3" class="align-top">Note sur la forme (30pts)</td>
                <td>Exposé : Qualité d'expression et de communication</td>
                <td class="float-end">/10</td>
            </tr>
            <td class="text-nowrap w-90">Exposé : Qualité de la présentation orale</td>
            <td class="float-end w-10">/10</td>
            </tr>
            <tr>
                <td>Personnalité du candidat</td>
                <td class="float-end">/10</td>
            </tr>
            <!-- -->
            <tr>
                <td rowspan="2" class="align-top">Note sur le fond (40pts)</td>
                <td>Présentation des résultats obtenus</td>
                <td class="float-end">/10</td>
            </tr>
            <tr>
                <td class="text-nowrap w-90">Compréhension et métrise technique du sujet, capacité à répondre aux questions
                </td>
                <td class="float-end w-10">/30</td>
            </tr>
            <tr>
                <td colspan="2" class="text-nowrap w-90">conformité de mise en stage</td>
                <td class="float-end w-10">/5</td>
            </tr>
            <tr>
                <td colspan="2" class="text-nowrap w-90">Dépot de mémoire en règle</td>
                <td class="float-end w-10">/5</td>
            </tr>
            <tr>
                <td colspan="2" class="text-nowrap w-90">TOTAL sur 80</td>
                <td class="float-end w-10">/80</td>
            </tr>
            <tr>
                <td colspan="2" class="text-nowrap w-90">TOTAL sur 20</td>
                <td class="float-end w-10">/20</td>
            </tr>

            </tr>
        </table>
    </div>
    <div>
        <div class="d-flex align-items-center justify-content-around">
            <p class="text-nowrap me-2">Remarques sur la soutenance : </p>
            <hr class="w-100">
        </div>
        <div>
            <hr class="w-100 mb-5">
            <hr class="w-100">
        </div>
    </div>
    <h6 class="text-center" style="text-decoration: underline;">NOTATION DU MEMOIRE</h6>

    <div>
        <p class="text-nowrap"><span style="text-decoration: underline;">NB</span>Les encadreurs écoles et industriels ne
            sont pas autorisés à donner une note d'évaluation pour le mémoire</p>
    </div>
    <div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <th>Critères d'évaluation</th>
                    <th>Note attribuée</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>FORME /20</td>
                    <td>
                        <span>- Effort de présentation <br></span>
                        <span>- Rédaction proprement dite comprenant : accentuation, ponctuation<br>orthographe
                            grammaticale, orthographe d'usage, vocabulaire, syntaxe et plan</span>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>FOND /30</td>
                    <td>
                        <span>- Problématique <br>- Méthode scientifiques utilisées<br>
                        - Plan suivi <br> -Exploitation des résultats <br>- Efficacité de la solution</span>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>TOTAL SUR 50</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>MOYENNE SUR 50</td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <h6 class="text-center">Membres du Jury :</h6>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <th>Président</th>
                    <th>Examinateur</th>
                    <th>Rapporteur</th>
                    <th>Encadreur/<br>Entreprise</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>NOM</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>SIGNATURE</td>
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
            <p class="text-nowrap me-2">Remarques sur le mémoire : </p>
            <hr class="w-100">
        </div>
        <div>
            <hr class="w-100 mb-5">
            <hr class="w-100">
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-center text-center">
        <p class="text-nowrap me-2">MENTION : </p>
        <hr class="w-50">
    </div>


@endsection
