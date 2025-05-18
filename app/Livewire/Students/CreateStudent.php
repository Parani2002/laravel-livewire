<?php

namespace App\Livewire\Students;

use App\Models\Course;
use App\Models\Department;
use App\Models\Payment;
use App\Models\Student;
use App\Models\StudentAdmission;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CreateStudent extends Component
{
    public string $firstname = '';
    public string $lastname = '';
    public int $age = 0;
    public string $address = '';
    public string $email = '';
    public string $phone = '';
    public int $course_id = 0;
    public string $course = '';
    public $courses = [];

    public int $student_id = 0;
    public  float $admission_fee = 5000.00;
    public string $status = '';
    public int $user_id = 1;
    public $deleted_at = '';
    public int $department_id = 0;


    public function render()
    {

       
        $departments = Department::all();
        $department = Department::find($this->department_id);
        return view('livewire.students.create-student', compact('departments', 'department'));
    }


   public function updatedDepartmentId($department_id)
{
    logger("Department changed to: " . $this -> department_id);
    $this->courses = Course::where('department_id', $this -> department_id);

}



    public function save()
    {
        $student = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'age' => 'required|integer|min:1|max:100',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'course_id' => 'required',
        ]);
        DB::beginTransaction();
        try {
            //insert into students table
            $student = Student::create([
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'age' => $this->age,
                'address' => $this->address,
                'email' => $this->email,
                'phone' => $this->phone,
                'course_id' => $this->course_id,
                'department_id' => $this->department_id,
            ]);
            $this->course = Course::find($this->course_id)->name;

            //insert into student_admissions table
            $student_admission = StudentAdmission::create([
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'phone' => $this->phone,
                'student_id' => $student->id,
                'admission_fee' => $this->admission_fee,
                'status' => $this->status,
                'user_id' => $this->user_id,
                'course' => $this->course,
                'deleted_at' => null,
            ]);
            //insert into payments table
            Payment::create([
                'student_id' => $student->id,
                'amount' => $this->admission_fee,
                'payment_date' => null,
                'payment_method' => null,
                'StudentAdmission_id' => $student_admission->id,
                'status' => 'Pending',
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
        return redirect('/students');
    }
}
