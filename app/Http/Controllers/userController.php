<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


use App\Models\type_formation;
use App\Models\formation;
use App\Models\program;
use App\Models\module;
use App\Models\niv_etudiant;
use App\Models\user_formation;
use App\Models\user_event;
use App\Models\user;
use App\Models\event;
use App\Models\formation_niv_etud;
use App\Models\user_niv_etud;

class userController extends Controller
{
    public function afficher_course(){
    $type_formation = type_formation::all();
    $formation = formation::all();
    $niv_etudiant = niv_etudiant::all();
    return view('user.formation.index',compact('type_formation','formation','niv_etudiant'));
    }


    public function add_to_cart($id){
        $formation = formation::find($id);
        $user = auth::user();

    
        $check = user_formation::where('user_id',$user->id)->where('formation_id',$formation->id)->first();
            if($check){
                return redirect()->back()->with('error','La Formation Déjà Dans Tes Favoris');
            }
            else{

                $CheckNivOfUser = user_niv_etud::where('user_id', 'like' , auth::user()->id)
                    ->pluck('niv_etud_id')
                    ->toArray();
                
                $CheckFormationNiv = formation_niv_etud::where('formation_id', formation::find($id)->id)
                    ->pluck('niv_etudiant_id')
                    ->toArray();

                $commonValues = array_intersect($CheckFormationNiv , $CheckNivOfUser);
                    
                if(!$commonValues){
                    return redirect()->back()->with('error',"La formation n'est pas adaptée à votre niveau académique");
                }
                else{

                    $user_formation = new user_formation ; 
                    
                    $user_formation->user_id = $user->id ;
                    $user_formation->formation_id = $formation->id ;
                    
                    $user_formation->save();
                    
                    $formation->increment('favoris');
                }
                
        
        return redirect()->back()->with('seccess',"La Formation a été ajouté à votre panier");
        }

    }

    public function afficher_mycart(){


                // $formation = formation::all();
                // $user = user::with('formation')->where('user_id',auth::user()->id);
                // $user_formation = user_formation::all();
    
    $test = db::table('formations-user')
        ->join('users' , function($join){
            $join->on('formations-user.user_id','=','users.id');
        })
        ->join('formations','formations-user.formation_id','=','formations.id')
        ->join('type_formations','formations.cod_typeformation','=','type_formations.id')
        ->where('user_id',auth::user()->id)
        ->select('*','formations-user.created_at as testcreatedat','formations.image_path as testimage','formations.id as formationid')
        ->get();
    $formation = formation::all();
    
    return view('user.mycart',compact('test','formation'));
    }



    public function event_abonne(request $request,$id){
        
        $event = event::find($id);
        $user = auth::user();

        $check = user_event::where('user_id',$user->id)->where('event_id',$event->id)->first();

        
        if($check){
            return redirect()->back()->with('error','Vous êtes déjà inscrit');  
        }
        else{

            $user_event = new user_event;
        
                $user_event->user_id = $user->id;
                $user_event->event_id = $event->id;
        
                $user_event->save();
                $event->increment('abonnement');
        
                return redirect()->back();
            // dd('not checked');
        }

        
        
    }

    public function search(request $request){
        //search about formation name
        //search about program name
        //search about type formation name 

        $query = $request->input('search');
        dd($query);
        $results = formation::search($query)->get();

        // return response()->json($results);
    }

}
