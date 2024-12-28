@extends('template')

@section('title', 'Créer un jury')

@section('styles')
    <link href="{{ asset('build/app-1aa50665.css') }}" rel="stylesheet">
@endsection

@section('content')
    @include('navbar')
    <div class="container mt-5 pt-5">
        <h1 class="text-center text-success mb-4">Créer un jury</h1>
        <form>
            <div >
                <input type="number" class="form-control" id="jury" name="jury" placeholder="Numéro de jury">
            </div>
            <div class="row">
                <div class="col-md-4 ">
                    <fieldset class="border p-3 rounded">
                        <legend class="w-auto px-2 text-success">Enseignant</legend>
                        <div class="mb-3">
                            <label for="enseignant1" class="form-label"></label>
                            <input type="text" class="form-control" id="enseignant1" name="enseignant1" placeholder="Nom">
                        </div>
                        <div class="mb-3">
                            <label for="president1" class="form-label"></label>
                            <input type="number" class="form-control" id="president1" name="president1" placeholder="Président">
                        </div>
                        <div class="mb-3">
                            <label for="examinateur1" class="form-label"></label>
                            <input type="number" class="form-control" id="examinateur1" name="examinateur1" placeholder="Examinateur">
                        </div>
                        <div class="mb-3">
                            <label for="rapporteur1" class="form-label"></label>
                            <input type="number" class="form-control" id="rapporteur1" name="rapporteur1" placeholder="Rapporteur">
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-4 mb-4">
                    <fieldset class="border p-3 rounded">
                        <legend class="w-auto px-2 text-success">Enseignant</legend>
                        <div class="mb-3">
                            <label for="enseignant2" class="form-label"></label>
                            <input type="text" class="form-control" id="enseignant2" name="enseignant2" placeholder="Nom">
                        </div>
                        <div class="mb-3">
                            <label for="president2" class="form-label"></label>
                            <input type="number" class="form-control" id="president2" name="president2" placeholder="Président">
                        </div>
                        <div class="mb-3">
                            <label for="examinateur2" class="form-label"></label>
                            <input type="number" class="form-control" id="examinateur2" name="examinateur2" placeholder="Examinateur">
                        </div>
                        <div class="mb-3">
                            <label for="rapporteur2" class="form-label"></label>
                            <input type="number" class="form-control" id="rapporteur2" name="rapporteur2" placeholder="Rapporteur">
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-4 mb-4">
                    <fieldset class="border p-3 rounded">
                        <legend class="w-auto px-2 text-success">Enseignant </legend>
                        <div class="mb-3">
                            <label for="enseignant3" class="form-label"></label>
                            <input type="text" class="form-control" id="enseignant3" name="enseignant3" placeholder="Nom">
                        </div>
                        <div class="mb-3">
                            <label for="president3" class="form-label"></label>
                            <input type="number" class="form-control" id="president3" name="president3" placeholder="Président">
                        </div>
                        <div class="mb-3">
                            <label for="examinateur3" class="form-label"></label>
                            <input type="number" class="form-control" id="examinateur3" name="examinateur3" placeholder="Examinateur">
                        </div>
                        <div class="mb-3">
                            <label for="rapporteur3" class="form-label"></label>
                            <input type="number" class="form-control" id="rapporteur3" name="rapporteur3" placeholder="Rapporteur">
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Enregistrer le jury</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('build/app-36c203e1.js') }}"></script>
@endsection
