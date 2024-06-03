<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\formation;
use App\Models\niv_etudiant;
use App\Models\formation_niv_etud;

class formation_niv_etudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formation_niv_etud = db::table('formation_niv_etuds')
        ->join('formations','formation_niv_etuds.formation_id','formations.id')
        ->join('niv_etudiants','formation_niv_etuds.niv_etudiant_id','niv_etudiants.id')
        ->get();
        return view('admin.formation_nivetudiant.index',compact('formation_niv_etud'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formation = formation::all();
        $niv_etudiant = niv_etudiant::get();
        return view('admin.formation_nivetudiant.create',compact('formation','niv_etudiant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        $check_formation = formation_niv_etud::where('formation_id',$request->formation_id)->first();
        $check_niv_etud = formation_niv_etud::where('niv_etudiant_id',$request->niv_etudiant_id)->first();

        if($check_formation){
            if($check_niv_etud){
                return to_route('forma_nivetudiant.create')->with('error','La Formation Avec Le Niveau D"étude Existent Déjà - Entrez à Nouveau');
            }
            dd('false');
        }
        $formation_niv_etud = new formation_niv_etud;

        $formation_niv_etud->formation_id = $request->input('formation_id');
        $formation_niv_etud->niv_etudiant_id = $request->input('niv_etudiant_id');
        
        $formation_niv_etud->save();
        return redirect()->route('forma_nivetudiant.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
