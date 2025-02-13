<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Livewire;

class CreateStudent extends Component
{
    public $firstname;
    public $lastname;
    public $age;
    public $address;
    public function render()
    {
        return view('livewire.create-student');
    }

    public function save(){
        

    }
}
