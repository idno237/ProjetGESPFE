@extends('template')

@section('title', 'Créer un étudiant')

@section('styles')
    <link href="{{ asset('build/app-1aa50665.css') }}" rel="stylesheet">
@endsection

@section('content')
    @include('navbar')
    <div class="container mt-5 pt-5">
        <h1 class="text-center text-success mb-4">Créer un étudiant</h1>
        <form>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <fieldset class="border p-3 rounded">
                        <legend class="w-auto px-2 text-success">Informations générales</legend>
                        <div class="mb-3">
                            <label for="matricule" class="form-label"></label>
                            <input type="text" class="form-control" id="matricule" name="matricule" placeholder="Matricule">
                        </div>
                        <div class="mb-3">
                            <label for="nom" class="form-label"></label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label"></label>
                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom">
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-4 mb-4">
                    <fieldset class="border p-3 rounded">
                        <legend class="w-auto px-2 text-success">Stage</legend>
                        <div class="mb-3">
                            <label for="theme" class="form-label"></label>
                            <input type="text" class="form-control" id="theme" name="theme" placeholder="Thème">
                        </div>
                        <div class="mb-3">
                            <label for="lieu_stage" class="form-label"></label>
                            <input type="text" class="form-control" id="lieu_stage" name="lieu_stage" placeholder="Lieu du stage/entreprise">
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-4 mb-4">
                    <fieldset class="border p-3 rounded">
                        <legend class="w-auto px-2 text-success">Infos</legend>
                        <div class="mb-3">
                            <label for="numero_jury" class="form-label"></label>
                            <input type="number" class="form-control" id="numero_jury" name="numero_jury" placeholder="Numéro du jury">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label"></label>
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                        <div class="mb-3">
                            <label for="heure" class="form-label"></label>
                            <input type="time" class="form-control" id="heure" name="heure">
                        </div>
                        <div class="mb-3">
                            <label for="salle" class="form-label"></label>
                            <input type="text" class="form-control" id="salle" name="salle" placeholder="Salle">
                        </div>
                    </fieldset>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">Enregistrer l'étudiant</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('build/app-36c203e1.js') }}"></script>
@endsection
