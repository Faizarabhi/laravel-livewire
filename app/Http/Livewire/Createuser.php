<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Createuser extends Component
{
    public $users;
    public $name = "Awesom name";
    public function mount()
    {
        $this->users = User::all();
    }
    public function render()
    {
        return view('livewire.createuser')->with(['name' => 'Jane', 'email' => 'jane@gmail.com']);
    }
}
