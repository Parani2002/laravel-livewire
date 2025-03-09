<div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
        @livewire('dashboard.card',['title' => 'Students','count' => 'Studentcount'])
        @livewire('dashboard.card',['title' => 'Teachers','count' => '122'])
        @livewire('dashboard.card',['title' => 'Courses','count' => '12'])

    </div>
    <h1>Student Management System</h1>
</div>
