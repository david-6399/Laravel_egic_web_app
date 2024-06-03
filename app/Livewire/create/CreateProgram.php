<?php

namespace App\Livewire\Create;

use Illuminate\Support\Facades\Session;
use App\Models\program;
use Livewire\Component;


class CreateProgram extends Component
{
    public $program_name ;

    public function saveprogram(){
        $this->validate([
            'program_name'=>'required'
        ]);

        program::create([
            'titre' => $this->program_name,
        ]);
        session::put('previousUrl',url()->previous());
        $previousUrl = session::get('previousUrl');
        return redirect()->to($previousUrl);
    }

    public function render()
    {
        return view('livewire.create.create-program');
    }
}
