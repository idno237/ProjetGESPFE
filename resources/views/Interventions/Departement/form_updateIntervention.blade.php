@extends('template')

@section('title', 'Mise à jour Intervention')

@section('content')
    @include('navbar')
    <div class="row">
        <div class="col-4">
            @include('sidebar')
        </div>
        <div class="col-6 p-5">
            <form action="{{route("update.intervention", $interventionRequest->id)}}" method="POST">
                @csrf
                <div class="card p-5">
                    <div class="card-title">
                        <h4 class="text-center">MODIFIER</h4>
                        <h5 class="text-center">{{$interventionRequest->grade}} {{$interventionRequest->nom_prenom_ens }}/ prevu :
                            {{ $interventionRequest->date }}</h5>
                    </div>
                    <div class="card-content">
                        <div class="mb-1 w-100">
                            <label for="date" class="col-sm-2 col-form-label text-nowrap">Date</label>
                            <input type="date" name="date" class="form-control w-100" id="date" value="{{$interventionRequest->date}}">
                        </div>
                        <div class="mb-1">
                            <label for="departement" class="col-sm-2 col-form-label text-nowrap">departement</label>
                            <select class="p-1 w-100" name="departement" id="departement">
                                @foreach ($departements as $departement)
                                    <option value="{{ $departement->nom_depart }}" @if($departement->nom_depart == $interventionRequest->departement) selected @endif>
                                        {{ $departement->nom_depart }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="prevu_pr" class="col-sm-2 col-form-label text-nowrap">président</label>
                            <input type="number" class="form-control" id="prevu_pr" name="prevu_pr"
                                value="{{ $interventionRequest->prevu_pr }}">
                        </div>
                        <div class="mb-1">
                            <label for="prevu_ra" class="col-sm-2 col-form-label text-nowrap">Rapporteur</label>
                            <input type="number" class="form-control" id="prevu_ra" name="prevu_ra"
                                value="{{ $interventionRequest->prevu_ra }}">
                        </div>
                        <div class="mb-1">
                            <label for="prevu_ex" class="col-sm-2 col-form-label text-nowrap">Examinateur</label>
                            <input type="number" class="form-control" id="prevu_ex" name="prevu_ex"
                                value="{{ $interventionRequest->prevu_ex }}">
                        </div>
                        <div class="d-flex align-item-center justify-content-between">
                            <div class="w-100 m-2"><a href="{{route("creation.decompte_prevu")}}" class="btn btn-warning w-100 mt-4">Annuler</a></div>
                            <div class="w-100 m-2"><button type="submit" class="btn btn-success w-100 mt-4 mr-2">Modifier</button></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>


@endsection
