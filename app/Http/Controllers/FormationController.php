<?php

namespace App\Http\Controllers;

use App\Models\module;
use App\Models\program;
use App\Models\formation;
use App\Models\niv_etudiant;
use Illuminate\Http\Request;
use App\Models\support_cours;
use App\Models\type_formation;
use App\Models\user_formation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;



class FormationController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $usertype ;

    public function __construct(){
        $this->middleware('check_usertype')->except('show');
    }

    public function index()
    {
        $formations = formation::all();
        
        

        
        // return [
        //     'data' => $data
        // ];

        $i=0;
        return view('admin.formation.index',compact('formations','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_formation = type_formation::all();
        $program = program::all();
        return view('admin.formation.create',compact('type_formation','program'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[

            'nome_forma' => 'required',
            'duree_forma' => 'required | integer',
            'tarif_forma' => 'required | integer',
            'image' => ' mimes:png,jpg,jpeg | max:5048',
            'cod_program' =>' required|array'
            ]);

        $check_cod_program = formation::where('cod_program',$request->cod_program)->first();

        if($check_cod_program){
            return to_route('formation.create')->with('error','program has been added');
        }else{

            $newimage = uniqid().'-'.$request->nome_forma . '.'. $request->image->extension();
            $request->image->move(public_path('images'),$newimage);
                
            $formation = new formation ;
            
            $formation->nome_forma = $request->input('nome_forma');
            $formation->duree_forma = $request->input('duree_forma');
            $formation->tarif_forma = $request->input('tarif_forma');
            $formation->cod_typeformation = $request->input('cod_typeformation');
            $formation->cod_program = $request->input('cod_program');
            $formation->image_path = $newimage;
    
            $formation->save();
        }
        
        return redirect()->route('formation.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function show(request $request,$id)
    {
        $formation = formation::with('program.module.support_cours')->find($id);
        $formation = formation::find($id);
        $program = program::find($formation->cod_program);
        $module = $program->module;
        $module2= $program->module;
        $niv_etudiant = $formation->niv_etudiant;
        $débouché = $formation->débouché;
        
        
        if(auth::check()){
            $usertype = auth()->user()->usertype;
        }else{
            $usertype = 'no user';
        }
        
        
        return view('user.formation.show',compact('module','formation','module2','usertype','niv_etudiant','débouché'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formation = formation::find($id);
        $type_formation = type_formation::all();
        $program = program::all();
        return view('admin.formation.edit',compact('formation','type_formation','program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $formation = formation::find($id);

        $formation->update($request->all());

        return redirect()->route('formation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formation = formation::find($id);
        $formation->delete();

        return redirect()->route('formation.index');
    }


    public function add_to_cart(request $request , $id){
        $formation = formation::find($id);
        $user = auth::user();
        
        

        $user_formation = new user_formation ; 
        $user_formation->user_id = $user->id ;
        $user_formation->formation_id = $formation->id ;

        

        $user_formation->save();
        return redirect()->back();

    }
}
