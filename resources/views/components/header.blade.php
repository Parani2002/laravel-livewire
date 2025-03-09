<header class="bg-blue-600 text-white shadow-md">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      
      <!-- Logo / Brand Name -->
      <a href="#" class="text-xl font-bold">Student Management</a>
  
      <!-- Navigation Links (Hidden in Mobile) -->
      <nav class="hidden md:flex space-x-6">
        <a href="{{ route('dashboard') }}" wire:navigate class="hover:underline">Dashboard</a>
        <a href="{{route('students')}}" wire:navigate class="hover:underline">Students</a>
        <a href="{{route('courses')}}" wire:navigate class="hover:underline">Courses</a>
        <a href="{{route('teachers')}}" wire:navigate class="hover:underline">Teachers</a>
      </nav>
  
      <!-- User Profile Dropdown -->
      <div class="relative">
        <button class="flex items-center space-x-2 focus:outline-none">
          <img class="w-8 h-8 rounded-full" src="https://via.placeholder.com/40" alt="User Avatar">
          <span class="hidden md:inline">John Doe</span>
        </button>
  
        <!-- Dropdown Menu -->
        <div class="absolute right-0 mt-2 w-48 bg-white text-gray-700 rounded shadow-lg hidden group-hover:block">
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
          <a href="#" class="block px-4 py-2 text-red-500 hover:bg-gray-100">Logout</a>
        </div>
      </div>
  
      <!-- Mobile Menu Button -->
      <button id="mobile-menu-btn" class="md:hidden">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>
    </div>
  
    <!-- Mobile Menu -->
    <nav id="mobile-menu" class="hidden md:hidden bg-blue-700 text-white p-3">
      <a href="#" class="block py-2">Dashboard</a>
      <a href="/students" class="block py-2">Students</a>
      <a href="#" class="block py-2">Courses</a>
      <a href="#" class="block py-2">Reports</a>
    </nav>
  
  </header>
  
  <script>
    // Toggle Mobile Menu
    document.getElementById("mobile-menu-btn").addEventListener("click", function() {
      document.getElementById("mobile-menu").classList.toggle("hidden");
    });
  </script>
  