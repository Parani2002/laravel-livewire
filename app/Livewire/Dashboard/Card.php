<?php

namespace App\Livewire\Dashboard;

use App\Models\Student;
use Livewire\Component;

class Card extends Component
{
    public string $title = "";
    public int $Studentcount = 0;
    public int $Teacherscount = 0;

    public function mount($title,$count)
    {
        $this->Studentcount = Student::count();
        $this->Teacherscount = 100;
        $this->title = $title;
      
    }
    
    
    public function render()
    {
        return view('livewire.dashboard.card');
    }
}
