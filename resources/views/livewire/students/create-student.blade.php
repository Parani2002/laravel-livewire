<div class="flex justify-center  min-h-screen bg-gray-100">
    <div class="w-full  p-6 shadow-lg rounded-xl">
        <h1 class="text-2xl font-bold text-blue-800 mb-4 text-left">Student Create Form</h1>
        
        <form wire:submit="save" method="post" class="space-y-4" id="studentForm">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="firstname" class="block text-gray-700 font-semibold">First Name</label>
                    <input type="text" id="firstname" wire:model="firstname"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300">
                    @error('firstname') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                </div>
    
                <div>
                    <label for="lastname" class="block text-gray-700 font-semibold">Last Name</label>
                    <input type="text" id="lastname" wire:model="lastname" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300">
                    @error('lastname') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                </div>
            </div>
          
<div class="grid grid-cols-2 gap-4">
    <div>
        <label for="age" class="block text-gray-700 font-semibold">Age</label>
        <input type="number" id="age" wire:model="age" 
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300">
        @error('age') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="email" class="block text-gray-700 font-semibold">Email</label>
        <input type="email" id="email" wire:model="email" 
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300">
        @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
    </div>
</div>
          
<div class="grid grid-cols-2 gap-4">


            <div>
                <label for="phone" class="block text-gray-700 font-semibold">Phone</label>
                <input type="text" id="phone" wire:model="phone" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300">
                @error('phone') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>
              <div>
                <label for="gender" class="block text-gray-700 font-semibold">Gender</label>
                <input type="text" id="phone" wire:model="phone" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300">
                @error('phone') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>
            </div>

            <div>
                <label for="address" class="block text-gray-700 font-semibold">Address</label>
                <input type="text" id="address" wire:model="address" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300">
                @error('address') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

        <div>
    <label for="department" class="block text-gray-700 font-semibold">Department</label>
    
    <select id="department" wire:model="department_id" 
        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300">
        <option value="">Select Department</option>
        @foreach ($departments as $department)
            <option value="{{ $department->id }}">{{ $department->name }}</option>
        @endforeach
    </select>
    
    @error('department_id') 
        <span class="text-red-600 text-sm">{{ $message }}</span> 
    @enderror
</div>


            <div>
                <label for="course" class="block text-gray-700 font-semibold">Course</label>
              
                <select wire:model="course_id"  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300">
                     <option value="">Select Course</option>
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                </select>
               
               
                @error('course_id') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <button type="submit" 
                class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition">
                Create Student
            </button>
        </form>
    </div>
</div>

