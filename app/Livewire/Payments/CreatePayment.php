<?php

namespace App\Livewire\Payments;

use App\Models\Payment;
use App\Models\Student;
use Livewire\Component;

class CreatePayment extends Component
{
    public function render()
    {
        return view('livewire.payments.create-payment', [
            'students' => Student::all(),
        ]);
    }
    public $student_id;
    public $amount;
    public $payment_method;

    protected $rules = [
        'student_id' => 'required|exists:students,id',
        'amount' => 'required|numeric|min:0.01',
        'payment_method' => 'required|string|max:50',
    ];

    public function submit()
    {
        $this->validate();

        Payment::create([
            'student_id' => $this->student_id,
            'amount' => $this->amount,
            'payment_method' => $this->payment_method,
        ]);

        session()->flash('message', 'Payment recorded successfully!');
        $this->reset();
    }
}
