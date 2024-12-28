@extends('template')

@section('title', 'Importer Jury')

@section('content')
    @include('navbar')
    <div>
        <div class="row">
            <div class="col-2">
                @include('sidebar')
            </div>
            <div class="col-10">
                <h2>Import Jurys</h2>
                <form action="{{ route('file.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" name="jury_file" id="" accept=".xlsx, .xls, .csv" class="form-control">
                    </div>
                    <br>
                    <input class="btn btn-success" type="submit" value="Sauvegarder">
                </form>
                <table class="table table-striped w-100">
                    <thead>
                        <tr>
                            <th>Jury</th>
                            <th>Matricule</th>
                            <th>Etudiant</th>
                            <th>Thème</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($etudiants as $etudiant )
                        <tr>
                            <td>{{$etudiant->jury_id}}</td>
                            <td>{{$etudiant->matricule_etud}}</td>
                            <td>{{$etudiant->nom_prenom}}</td>
                            <td>{{$etudiant->theme}}</td>
                            <td>
                                <form method="POST" action="{{route("generate.pdf", $etudiant->matricule_etud)}}" >
                                    @csrf
                                    <button type="submit"><i class="fas fa-download p-1"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td>Aucun Jury pour l'instant!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection



{{-- comment va se passé le jury de chaque département?
donc le numéro du jury ne peut etre unique car chaque départment
à un jury allant de 1 à x --}}
