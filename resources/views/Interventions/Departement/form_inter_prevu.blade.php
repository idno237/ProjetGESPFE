@extends('template')

@section('title', 'Intervention')

@section('content')
    @include('navbar')
    <div class="">
        <span class="float-start">
            <a class="fas fa-arrow-left p-1 text-decoration-none cursor-pointer"></a>
        </span>
        <h2 class="text-center">INTERVENTION PREVUE</h2>
    </div>
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <div>
                <a href="{{ route("accueil") }}" class="mb-2 btn btn-primary me-3 mx-3">Retour</a>
                <a href="{{ route("choix.departement") }}" class="mb-2 btn btn-primary me-3">Liste Intervention</a>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." class="p-1 pe-5 mb-3 rounded">
            </div>

            <table class="table table-striped" style="width: 100%" id="myTable">
                <thead class="sticky-top">
                    <tr class="header">
                        <th class="table-active text-center">Grade</th>
                        <th class="table-active text-left text-nowrap">Noms/Prenoms</th>
                        <th class="table-active text-center">Date</th>
                        <th class="table-active text-center">Departement</th>
                        <th class="table-active text-center">P</th>
                        <th class="table-active text-center">R</th>
                        <th class="table-active text-center">E</th>
                        <th colspan="2" class="table-active text-center m-10">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($intervention_prevu as $intervention)
                        <form action="{{ route('decompte.save.jour') }}" method="POST">
                            @csrf
                            <tr class="m-2">
                                <td class="text-center m-2">{{ $intervention->grade }}</td>
                                <td class="text-nowrap text-left">{{ $intervention->nom_prenom_ens }}</td>
                                <td><input type="date" name="date" id="date" class="mx-12"></td>
                                <td>
                                    <select class="mx-2" name="departement" id="">
                                        @foreach ($departements as $departement)
                                            <option value="{{ $departement->nom_depart }}">
                                                {{ $departement->nom_depart }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="text-center"><input type="number" min="0" name="prevu_pr"
                                        value="{{ $intervention->prevu_pr }}"></td>
                                <td class="text-center"><input type="number" min="0" name="prevu_ra"
                                        value="{{ $intervention->prevu_pr }}"></td>
                                <td class="text-center"><input type="number" min="0" name="prevu_ex"
                                        value="{{ $intervention->prevu_pr }}"></td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <button
                                            class=" bg-primary m-1 d-flex align-items-center justify-content-center text-nowrap m-20">
                                            <i class="fas fa-save p-1"></i> (0)
                                        </button>
                                        {{-- <a href="" class="btn btn-secondary"><i class="fas fa-pencil-alt"></i></a> --}}
                                    </div>
                                </td>
                                <td class="text-center"><input type="hidden" name="nom_prenom_ens"
                                        value="{{ $intervention->nom_prenom_ens }}"></td>
                                <td class="text-center"><input type="hidden" name="grade"
                                        value="{{ $intervention->grade }}"></td>
                            </tr>
                        </form>
                    @empty
                    @endforelse

                </tbody>
            </table>

        </div>
        <div class="col"></div>
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
