<div>
    <div class="p-4 bg-white rounded shadow">
        @if (session()->has('message'))
            <div class="mb-4 text-green-600">
                {{ session('message') }}
            </div>
        @endif
    
        <form wire:submit.prevent="submit">
            <div class="mb-4">
                <label class="block mb-1">Student</label>
                <select wire:model="student_id" class="w-full border rounded p-2">
                    <option value="">-- Select Student --</option>
                    @foreach ($students as $student)
                        <option value="{{ $student->id }}">{{ $student->firstname ." " . $student -> lastname }}</option>
                    @endforeach
                </select>
                @error('student_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
    
            <div class="mb-4">
                <label class="block mb-1">Amount</label>
                <input type="number" wire:model="amount" class="w-full border rounded p-2" step="0.01">
                @error('amount') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
    
            <div class="mb-4">
                <label class="block mb-1">Payment Method</label>
                <select wire:model="payment_method" class="w-full border rounded p-2">
                    <option value="">-- Select Method --</option>
                    <option value="Cash">Cash</option>
                    <option value="Card">Card</option>
                    <option value="Online">Online</option>
                </select>
                @error('payment_method') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
    
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                Submit Payment
            </button>
        </form>
    </div>
    
</div>
