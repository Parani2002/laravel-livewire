<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 20;
    public $name = "";
 
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}

