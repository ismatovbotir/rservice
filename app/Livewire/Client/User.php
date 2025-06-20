<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\User as ClientUser;
use App\Models\Client;

class User extends Component
{
    public $id;
    public $name;
    public $email;
    public $phone;
    public $password;

    public function mount($id){
        $this->id=$id;
        //dd($this->id);

    }

    public function createUser(){
        dd($this->email);
        $this->dispatch('user-created');
    }
    public function render()
    {
        return view('livewire.client.user');
    }
}
