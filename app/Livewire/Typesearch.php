<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\type_formation;
use App\Models\niv_etudiant;
use App\Models\formation;
use App\Models\user;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use App\Http\middleware;
use App\Models\formation_niv_etud;
use App\Models\user_niv_etud;

class Typesearch extends Component
{
    use WithPagination;

    public $result=[];
    public $result_by_niv=[];
    public $add_niv = false ;
    public $niv_without_formation = false ;
    
    

    public function typesearch($id){
        $type_formarion = type_formation::find($id);
        $this->result = $type_formarion->formation; 
        
    }

    public function toutlesformation(){
        $this->result = formation::get();
    }

    public function formation_par_niv(){
    
        $checkuserId = auth()->user()->id;
        $userid = user_niv_etud::where('user_id',$checkuserId)->get();
        $niv_etudIdInArray = $userid->pluck('niv_etud_id')->toArray();
        $checkNiv_etudId =  formation_niv_etud::whereIn('niv_etudiant_id',$niv_etudIdInArray)->get();
        $formationIdInArray = $checkNiv_etudId->pluck('formation_id')->toArray();
        $formationByNiv_etud = formation::wherein('id',$formationIdInArray)->get();
        
        if (count($userid) >= 1) {
            if (count($checkNiv_etudId) >= 1) {
                $this->result_by_niv = $formationByNiv_etud;
            } else {
                $this->niv_without_formation = true;
            }
        } else {
            $this->add_niv = true;
        }
    }
        

    


    


    public function render()
    {   

        $formations = formation::paginate(8);
        $niv_etudiants = niv_etudiant::all();

        $formationsWithTypes = formation::with('type_formation')->get();
        $typeIds = $formationsWithTypes->pluck('cod_typeformation')->unique()->toArray();
        $type_formation = type_formation::whereIn('id', $typeIds)->get();

        
        return view('livewire.typesearch',compact('type_formation','formations','niv_etudiants'));
    }
}
