<?php

namespace App\Livewire\Dashboard;

use App\Models\Payment;
use App\Models\Student;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $pending_payments = Payment::where('status', 'pending')->get();
        $new_students = Student::all() ;
        return view('livewire.dashboard.dashboard', [
            'pending_payments' => $pending_payments,
            'new_students' => $new_students
        ]);
    }
}
