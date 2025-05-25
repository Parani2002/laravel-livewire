<?php

namespace App\Livewire\Dashboard;

use App\Models\Student;
use Livewire\Component;

class Card extends Component
{
    public string $title = "";
    public int $count = 0;
  
    
    
    public function render()
    {
        return view('livewire.dashboard.card');
    }
}
