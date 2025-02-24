<?php

namespace App\Livewire\Students;

use Livewire\Component;

class CreateStudent extends Component
{
    public string $firstname = '';
    public string $lastname = '';
    public int $age =0;
    public string $address= '';
    public $fullname='';

    public function render()
    {
        return view('livewire.students.create-student');
        
    }

    public function save()
    {
        $this->fullname = $this->firstname . $this->lastname;
    }
}
