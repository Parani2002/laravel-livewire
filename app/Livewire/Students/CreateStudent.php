<?php

namespace App\Livewire\Students;

use App\Models\Student;
use Livewire\Component;

class CreateStudent extends Component
{
    public string $firstname = '';
    public string $lastname = '';
    public int $age =0;
    public string $address= '';
    public string $email= '';
    public string $phone= '';
    public string $course= '';
    public $fullname='';

    public function render()
    {
        return view('livewire.students.create-student');
        
    }

    public function save()
    {
        //$this->fullname = $this->firstname . $this->lastname;
        $student = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'age' => 'required|integer|min:1|max:100',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'course' => 'required',
        ]);
        dd($student);
        Student::create($student);
        return redirect('/students');
    }
}
