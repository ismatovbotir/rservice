<?php

namespace App\Livewire\Client;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Models\Client;

class Index extends Component
{
    use WithPagination;
    public $client="";

    
    #[On('client-created')]
     public function render()
    {
        if($this->client!==""){

            return view('livewire.client.index',['clients'=>Client::where('name','like','%'.$this->client.'%')->with('companies')->paginate(20)]);
        }else{

            return view('livewire.client.index',['clients'=>Client::with('companies')->paginate(20)]);
        }
    }
}
