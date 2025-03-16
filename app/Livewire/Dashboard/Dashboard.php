<?php

namespace App\Livewire\Dashboard;

use App\Models\Payment;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $pending_payments = Payment::where('status', 'failed')->get();
        return view('livewire.dashboard.dashboard', [
            'pending_payments' => $pending_payments
        ]);
    }
}
