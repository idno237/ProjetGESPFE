<?php

namespace App\Http\Controllers;

use App\Imports\JuryImport;
use App\Models\Jury;
use App\Http\Requests\StoreJuryRequest;
use App\Http\Requests\UpdateJuryRequest;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class JuryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJuryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Jury $jury)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jury $jury)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJuryRequest $request, Jury $jury)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jury $jury)
    {
        //
    }

    public function importerJury(){
        $etudiants = Etudiant::all();
        return view("Jurys.importJury", compact("etudiants"));
    }

    // public function fileImport(){
    //     return view("", compact(""));
    // }

    public function Import(Request $request){
        Excel::import(new JuryImport, $request->file("jury_file"));
        return back();
    }

    public function creer_jury(){
        return view("Jurys.creejury");
    }
}
