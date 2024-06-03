<?php

namespace App\Livewire\Create;


use Illuminate\Support\Facades\Session;
use App\Models\module;
use Livewire\Component;

class CreateModule extends Component
{
    public $module_name ;
    public $module_Coefficient ;


    public function savemodule(){
       module::create([
            'name' => $this->module_name,
            'coefficient' => $this->module_Coefficient
        ]);

        session::put('ToUrl',url()->previous());
        $ToUrl = session::get('ToUrl');

        return redirect()->to('ToUrl');

    }
    public function render()
    {
        return view('livewire.create.create-module');
    }
}
