<div class="w-64 h-screen bg-blue-900 text-white p-4">
   
    <nav>
        <a href="{{ route('dashboard') }}" class="flex items-center p-3 hover:bg-blue-700 rounded">
            <span class="ml-3">🏠 Dashboard</span>
        </a>
        <a href="{{ route('students') }}" class="flex items-center p-3 hover:bg-blue-700 rounded">
            <span class="ml-3">👨‍🎓 Students</span>
        </a>
        <a href="{{ route('teachers') }}" class="flex items-center p-3 hover:bg-blue-700 rounded">
            <span class="ml-3">👩‍🏫 Teachers</span>
        </a>
        {{-- <a href="#" class="flex items-center p-3 hover:bg-blue-700 rounded">
            <span class="ml-3">📚 Classes</span>
        </a> --}}
        <a href="{{ route('payments.create') }}" class="flex items-center p-3 hover:bg-blue-700 rounded">
            <span class="ml-3">⚙️ Payments</span>
        </a>
        {{-- <a href="" class="flex items-center p-3 hover:bg-blue-700 rounded">
            <span class="ml-3">⚙️ Settings</span>
        </a> --}}
    </nav>
</div>