@extends('template')

@section('title', 'Intervention')

@section('content')
    @include('navbar')
    <div class="row">
        <div class="col-2">
            @include('sidebar')
        </div>
        <div class="col">
        </div>
        <div class="col-2 mt-3">
            <a class="btn btn-primary bg-success" href="{{route("importer.jury")}}" >Importer Jury</a>
        </div>
    </div>
@endsection
