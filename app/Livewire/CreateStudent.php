<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Livewire;
use Livewire\Attributes\Validate; 

class CreateStudent extends Component
{
   
    public string $firstname = '';

    
    public string $lastname = '';

   
    public int $age =0;

  
    public string $address= '';

    public $fullname='';

    public function render()
    {
        return view('livewire.create-student');
    }

    public function save(){
        $this->fullname = $this->firstname . $this->lastname;
        


    }
}
