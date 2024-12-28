@extends('template')

@section('title', 'Intervention')

@section('content')
    @include('navbar')
    <div class="row">
        <div class="col-3">
            @include('sidebar')
        </div>
        <div class="col-8">
            <h4 class="text-center">ETAT DE SERVICES FAITS DES PRESTATIONS DES SOUENANCES DES MEMOIRES DE FIN D'ETUDE
                INGENIEUR</h4>

            <h4 class="text-center">DEPARTEMENT : {{ $departement->nom_depart }}</h4>

            <table class="table">
                <thead>
                    <tr>
                        <th colspan="1" class="text-center">
                            <div class="d-flex align-items-center justify-content-center">
                                <form action="{{ route('file.export') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <a class="btn btn-success me-3" href="{{ route("choix.departement.bilan") }}">Retour</a>
                                    <input type="hidden" name="departement" id="" value="{{ $departement->nom_depart }}">
                                    <button class="btn btn-success me-3" type="submit">Decompte {{$departement->id_depart}} (.xlsx)</button>
                                </form>
                                <form action="{{ route("BilanTotal.export")}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button class="btn btn-success me-3" type="submit">Etat Service (.xlsx)</button>
                                </form>
                            </div>
                        </th>
                        <th colspan="1" class="text-center"></th>
                        <th colspan="3" class="text-center">Bilan</th>
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
                            <td class="text-center">{{ $intervention->sum_effec_pr }}</td>
                            <td class="text-center">{{ $intervention->sum_effec_ra }}</td>
                            <td class="text-center">{{ $intervention->sum_effec_ex }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td></td>
                            <td class="text-center">Aucune ressource disponible...!</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="col-2"></div>
    </div>

@endsection
