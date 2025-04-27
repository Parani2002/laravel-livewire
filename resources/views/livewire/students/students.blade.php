<div class="overflow-x-auto flex flex-col space-y-4 p-8">
    <button class=" flex justify-end gap-2">
        <a href="{{ route('students.create') }}" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
            Add Student
        </a>
        <a href="{{ route('students.export') }}" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
            Student Export
        </a>
    </button>
  <table class="min-w-full border border-gray-200 divide-y divide-gray-200 dark:border-gray-700 dark:divide-gray-700 shadow-lg rounded-lg overflow-hidden">
      <thead class="bg-gray-100 dark:bg-gray-800">
          <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase dark:text-gray-300">First Name</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase dark:text-gray-300">Last Name</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase dark:text-gray-300">Age</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase dark:text-gray-300">Address</th>
              <th class="px-6 py-3 text-end text-xs font-medium text-gray-700 uppercase dark:text-gray-300">Actions</th>
          </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-900 dark:divide-gray-700">
          @foreach($students as $student)
              <tr wire.id = "{{$student -> id}}" class="hover:bg-gray-50 dark:hover:bg-gray-800 transition-all">
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">{{$student->firstname}}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">{{$student->lastname}}</td>

                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$student->age}}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$student->address}}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <button type="button" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none" wire:click="deleteStudent({{ $student->id }})" wire.confirm="Are you sure you want to delete this student?">
                          Delete
                      </button>
                  </td>
              </tr>
          @endforeach
      </tbody>
  </table>
  @if (session('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
         class="p-3 bg-green-500 text-white fixed top-5 right-5 rounded-lg shadow-lg">
        {{ session('success') }}
    </div>
@endif

</div>