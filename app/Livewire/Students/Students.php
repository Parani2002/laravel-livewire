<?php

namespace App\Livewire\Students;

use App\Exports\StudentsExport;
use App\Models\Student;
use Livewire\Component;

use Maatwebsite\Excel\Facades\Excel;

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
        return redirect('/students')->with('success','Student Deleted Successfully');
    }
    public function export() 
    {
        return Excel::download(new StudentsExport, 'students.xlsx');
    }
}
