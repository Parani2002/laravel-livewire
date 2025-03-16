<div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
        @livewire('dashboard.card',['title' => 'Students','count' => 'Studentcount'])
        @livewire('dashboard.card',['title' => 'Teachers','count' => '122'])
        @livewire('dashboard.card',['title' => 'Courses','count' => '12'])

    </div>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold text-blue-800 mb-4 text-center">Pending Payments</h1>
    
        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-blue-600 text-white">
                        <th class="py-2 px-4 border border-gray-300">Student ID</th>
                        <th class="py-2 px-4 border border-gray-300">First Name</th>
                        <th class="py-2 px-4 border border-gray-300">Last Name</th>
                        <th class="py-2 px-4 border border-gray-300">Course</th>
                        <th class="py-2 px-4 border border-gray-300">Phone</th>
                        <th class="py-2 px-4 border border-gray-300">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pending_payments as $pending_payment)
                    <tr class="odd:bg-gray-100 even:bg-gray-50 hover:bg-gray-200 transition">
                        <td class="py-2 px-4 border border-gray-300 text-center">{{ $pending_payment->student_id }}</td>
                        <td class="py-2 px-4 border border-gray-300 text-center">{{ $pending_payment->student->firstname }}</td>
                        <td class="py-2 px-4 border border-gray-300 text-center">{{ $pending_payment->student->lastname }}</td>
                        <td class="py-2 px-4 border border-gray-300 text-center">{{ $pending_payment->student->course }}</td>
                        <td class="py-2 px-4 border border-gray-300 text-center">{{ $pending_payment->student->phone }}</td>
                        <td class="py-2 px-4 border border-gray-300 text-center font-semibold text-red-600">
                            {{ number_format($pending_payment->amount, 2) }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    

</div>
