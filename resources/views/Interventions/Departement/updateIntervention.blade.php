@extends('template')

@section('title', 'Intervention')

@section('content')
    @include('navbar')
    <div class="row">
        <div class="col">
            @include('sidebar')
        </div>
        <div class="col-10">
            <h2 class="text-center">LISTE D'INTERVENTION</h2>
            <div class="mb-4"><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."
                    class="rounded float-center"></div>
            <div class="table-responsive hauteur">
                <table class="table table-striped sticky-top" id="myTable" style="width: 100%">
                    <thead class="sticky-top">
                        <tr>
                            <a href="{{ route('creation.decompte_prevu') }}" class="mb-3 btn btn-primary">Back</a>
                        </tr>
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
                    <tbody class="table-body-scroll">
                        <form action="{{ route('decompte.save.jour') }}" method="POST">
                            @csrf
                            @forelse ($intervention_prevu as $intervention)
                                <tr class="m-2">
                                    <td class="text-center m-2">{{ $intervention->grade }}</td>
                                    <td class="text-nowrap text-left">{{ $intervention->nom_prenom_ens }}</td>
                                    <td>{{ $intervention->date }}</td>
                                    <td class="text-nowrap text-center"> {{ $intervention->departement }} </td>
                                    <td class="text-center"> {{ $intervention->prevu_pr }}</td>
                                    <td class="text-center"> {{ $intervention->prevu_ra }}</td>
                                    <td class="text-center"> {{ $intervention->prevu_ex }}</td>

                                    <td>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a href="{{ route('form.update.decompte.prevu', $intervention) }}"
                                                class=" btn btn-primary me-3">
                                                <i class="fas fa-pencil"></i>
                                            </a>
                                            <a href="" class="btn btn-secondary"><i class="fas fa-trash"></i></a>
                                            <div class="text-center"><input type="hidden" name="nom_prenom_ens"
                                                    value="{{ $intervention->nom_prenom_ens }}"></div>
                                            <div class="text-center"><input type="hidden" name="grade"
                                                    value="{{ $intervention->grade }}"></div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                            @endforelse

                        </form>
                    </tbody>
                </table>
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
