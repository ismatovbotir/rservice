<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;
    public $id;
    public function mount($id){
        $this->id=$id;
    }
    #[On('user-created')]
    public function render()
    {
        $users=User::where('client_id',$this->id)->get();
        return view('livewire.client.users',['users'=>$users]);
    }
}
