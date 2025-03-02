<?php

namespace App\Livewire\Students;

use App\Models\Student;
use Livewire\Component;

class Students extends Component
{
    public function render()
    {
        $students = Student::all();
        return view('livewire.students.students',compact('students'));
    }
    public function deleteStudent($id)
    {
        Student::destroy($id);
        return redirect('/students');
    }
}
