<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\user;

class Usertable extends Component
{
    
    public $searchuser = '';

    public function render()
    {
        $search = [];
        // $users = user::paginate(5);
        
        if(strlen($this->searchuser >= 1)){
            $search = user::where('id','like',$this->searchuser)->get();
        }

        
        return view('livewire.usertable',[
            'userinfo'=>$search,
            'users'=> user::all(),
        ]);
    }
}
