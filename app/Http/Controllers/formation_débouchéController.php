<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\formation_débouché;
use App\Models\formation;
use App\Models\débouché;

class formation_débouchéController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formation_débouché = db::table('formation_débouchés')
        ->join('formations','formation_débouchés.formation_id','formations.id')
        ->join('débouché','formation_débouchés.débouché_id','débouché.id')
        ->get();

        
        
        return view('admin.formation_débouché.index',compact('formation_débouché'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formation = formation::all();
        $débouché = débouché::all();
        return view('admin.formation_débouché.create',compact('formation','débouché'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check_formation = formation_débouché::where('formation_id',$request->formation_id)->first();
        $check_débouché = formation_débouché::where('débouché_id',$request->débouché_id)->first();

        if($check_formation){
            if($check_débouché){
                return to_route('forma_débouché.create')->with('error','La Formation Et Le Débouché Existent Déjà - Entrez à Nouveau');
            }
            $formation_débouché = new formation_débouché;
            
            $formation_débouché->formation_id = $request->input('formation_id');
            $formation_débouché->débouché_id = $request->input('débouché_id');
    
            $formation_débouché->save();
    
            return redirect()->route('forma_débouché.index');   
        }

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
    public function edit($formation , $débouché)
    {
       }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $formation , $débouché)
    {
     
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
