@extends('template')

@section('title', 'Intervention')

@section('content')
    @include('navbar')
    <div class="row">
        <div class="col-3">
            @include('sidebar')
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-title">
                    <h2 class="text-center">Bilan d'intervention</h2>
                </div>
                <div class="card-content">
                    <form action="{{ route('departement.bilan') }}" method="POST"
                        class="d-flex align-item-center justify-content-center mt-5">
                        @csrf
                        <h4 class="me-5">Votre Departement : </h4>
                        <select class="mx-2" name="departement" id="">
                            @foreach ($departements as $departement)
                                <option value="{{ $departement->nom_depart }}">
                                    {{ $departement->nom_depart }}
                                </option>
                            @endforeach
                        </select>
                        <button class="btn btn-success me-3" type="submit">Bilan</button>
                    </form>

                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="2" class="text-center"> </th>
                                <th colspan="3" class="text-center">Effectif</th>
                            </tr>
                            <tr>
                                <th class="table-active text-center">Grade</th>
                                <th class="table-active text-center text-nowrap">Noms/Prenoms</th>
                                <th class="table-active text-center">P</th>
                                <th class="table-active text-center">R</th>
                                <th class="table-active text-center">E</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($interventions as $intervention)
                                <tr>
                                    <td class="text-center">{{ $intervention->grade }}</td>
                                    <td class="text-nowrap text-center">{{ $intervention->nom_prenom_ens }}</td>
                                    <td class="text-center">{{ $intervention->effec_pr }}</td>
                                    <td class="text-center">{{ $intervention->effec_ra }}</td>
                                    <td class="text-center">{{ $intervention->effec_ex }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td></td>
                                    <td>Aucune ressource disponible...!</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                    </table>
                    @endforelse
                    </tbody>
                    </table>

                </div>

            </div>
        </div>
        <div class="col-2"></div>
    </div>

@endsection
