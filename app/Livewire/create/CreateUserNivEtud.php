<?php

namespace App\Livewire\Create;

use Algolia\AlgoliaSearch\Http\Psr7\Uri;
use Livewire\Component;
use App\Models\niv_etudiant;
use App\Models\user_niv_etud;
use Symfony\Component\HttpFoundation\UrlHelper;

class CreateUserNivEtud extends Component
{
    public $user_niv ; 
    
    public function saveuserniv($id){
       
        $check = user_niv_etud::where('user_id',$id)->where('niv_etud_id',$this->user_niv)->first();

        if($check){
            return to_route('course')->with('error','Votre niveau a ete déja saiser');
        }else{
            user_niv_etud::create([
                'user_id' => $id,
                'niv_etud_id' => $this->user_niv ,
            ]);
        }


        return redirect()->route('course');

    }
    public function render()
    {
        $niv_etudiant = niv_etudiant::all();
        return view('livewire.create.create-user-niv-etud',[
            'niv_etudiant' => $niv_etudiant,
        ]);
    }
}
