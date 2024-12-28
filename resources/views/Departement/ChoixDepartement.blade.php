@extends('template')

@section('title', 'Intervention')

@section('content')
    @include('navbar')
    <div class="row">
        <div class="col-2">
            @include('sidebar')
        </div>
        <div class="col-10 d-flex align-items-center justify-content-center">

            <form action="{{route("choix.departementTraitement")}}" method="post">
                @csrf
                <h4 class="m-5">CHOISIR VOTRE DEPARTEMENT</h4>
                <div class="d-flex form-inline m-2">
                    <select class="mx-2" name="departement" id="">
                        @foreach ($departements as $departement)
                            <option value="{{ $departement->nom_depart }}">
                                {{ $departement->nom_depart }}
                            </option>
                        @endforeach
                    </select>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
@endsection
