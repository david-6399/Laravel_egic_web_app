<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\user;

class Checkstudient extends Component
{
    //if user is alreeady a student he give request to egic to accept hime and giv him access to confidential data
    public $test ;
    public function checkstudient($id){
            $this->test = $id;
            $studient = user::where('id','like',$this->test)->update(['usertype'=>2]); 
            return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.checkstudient');
    }
}
