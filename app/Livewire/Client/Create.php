<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\Client;

class Create extends Component
{
    public $name="";
    public $phone="";
   
   
    public function createClient(){
        $newClient=Client::create([
            'name'=>$this->name,
            'phone'=>$this->phone
        ]);
        //dd($newClient);
        $this->reset('name','phone');
        $this->dispatch('client-created');
        
    }
   
    public function render()
    {
        

        return view('livewire.client.create');
    }

}
