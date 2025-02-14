<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Livewire;
use Livewire\Attributes\Validate; 

class CreateStudent extends Component
{
    #[Validate('required|min:5')]
    public string $firstname = '';

    #[Validate('required|min:5')] 
    public string $lastname = '';

    #[Validate('required')] 
    public int $age =0;

    #[Validate('required')] 
    public string $address= '';

    public function render()
    {
        return view('livewire.create-student');
    }

    public function save(){
        dd('save');

    }
}
