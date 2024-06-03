<?php

namespace App\Livewire\Create;

use Livewire\Component;
use App\Models\type_formation;
use Illuminate\Support\Facades\Session;


class CreateTypeFormat extends Component
{
    public $name;
    public $description ;
    
    public function savetypeformation(){
        
        type_formation::create([
                'name' => $this->name ,
                'description' => $this->description
        ]);

        Session::put('previousUrl', url()->previous());
        $previousUrl = Session::get('previousUrl');
        return redirect()->to($previousUrl);
    }

    public function render()
    {
        return view('livewire.create.create-type-format');
    }
}
