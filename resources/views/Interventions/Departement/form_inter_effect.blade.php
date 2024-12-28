@extends('template')

@section('content')
    @include('navbar')
    <div class="row float-center">
        <div class="col">
            @include('sidebar')
        </div>
        <div class="col-10" >
            <div class="table-responsive">
                <h2 class="text-center">INTERVENTION EFFECTIF</h2>
                <div class="mb-4"><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."
                        class="rounded float-center" ></div>
                        <div class="table-responsive hauteur" >
                            <table id="myTable" class="table table-striped" style="width: 100%">
                                <figcaption style="font-weight: bold; margin-bottom:1rem; text-transform:uppercase">INTERVENTION EFFECTIF</figcaption>
                                <thead class="sticky-top" >
                                    <tr>
                                        <th colspan="2" class="table-active text-center">Date</th>
                                        <th colspan="3" class="table-active text-center">Prévu</th>
                                        <th colspan="3" class="table-active text-center">Effectif</th>
                                        <th class="table-active"></th>
                                    </tr>
                                    <tr>
                                        <th class="table-active text-center">Grade</th>
                                        <th class="table-active text-center text-nowrap">Noms/Prenoms</th>
                                        <th class="table-active text-center">P</th>
                                        <th class="table-active text-center">R</th>
                                        <th class="table-active text-center">E</th>
                                        <th class="table-active text-center">P</th>
                                        <th class="table-active text-center">R</th>
                                        <th class="table-active text-center">E</th>
                                        <th class="table-active text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Contenu de votre tableau -->
                                    @forelse ($decompteJours as $decompteJour)
                                        <form method="POST" action="{{ route('udateDecompte.journalier', $decompteJour) }}">
                                            @csrf
                                            <tr>
                                                <td class="text-center">{{ $decompteJour->grade }}</td>
                                                <td class="text-nowrap text-center">{{ $decompteJour->nom_prenom_ens }}</td>
                                                <td class="text-center">{{ $decompteJour->prevu_pr }}</td>
                                                <td class="text-center">{{ $decompteJour->prevu_ra }}</td>
                                                <td class="text-center">{{ $decompteJour->prevu_ex }}</td>
                                                <td><input class="text-center" type="number" min="0" name="effec_pr"
                                                        value="{{ $decompteJour->effec_pr }}"></td>
                                                <td><input class="text-center" type="number" min="0" name="effec_ra"
                                                        value="{{ $decompteJour->effec_ra }}"></td>
                                                <td><input class="text-center" type="number" min="0" name="effec_ex"
                                                        value="{{ $decompteJour->effec_ex }}"></td>
                                                <td>
                                                    <div>
                                                        <button
                                                            class="text-center bg-primary m-1 d-flex align-items-center justify-content-center text-nowrap m-20">
                                                            <i class="fas fa-save p-1"></i> (0)
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <td><input type="hidden" name="prevu_pr" value="{{ $decompteJour->prevu_pr }}"></td>
                                            <td><input type="hidden" name="prevu_ra" value="{{ $decompteJour->prevu_ra }}"></td>
                                            <td><input type="hidden" name="prevu_ex" value="{{ $decompteJour->prevu_ex }}"></td>
                                        </form>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

            </div>
        </div>
    </div>
@endsection

<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Parcourir toutes les lignes de la table et afficher celles qui correspondent à la recherche
        for (i = 0; i < tr.length; i++) {
            var found = false; // Indicateur pour vérifier si la ligne correspond à la recherche

            // Parcourir toutes les cellules de chaque ligne
            for (var j = 0; j < tr[i].cells.length; j++) {
                td = tr[i].cells[j];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        found = true; // La ligne correspond à la recherche
                        break;
                    }
                }
            }

            // Afficher ou masquer la ligne en fonction du résultat de la recherche
            if (found) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
</script>
