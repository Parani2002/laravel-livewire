<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold text-blue-600 mb-4">Courses List</h1>
    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-blue-300">
            <thead>
                <tr class="bg-blue-500 text-white">
                    <th class="p-3 border border-blue-300">Course ID</th>
                    <th class="p-3 border border-blue-300">Course Name</th>
                    <th class="p-3 border border-blue-300">Course Description</th>
                    <th class="p-3 border border-blue-300">Course Department</th>
                    <th class="p-3 border border-blue-300">Duration</th>
                    <th class="p-3 border border-blue-300">Admission Fee</th>
                    <th class="p-3 border border-blue-300">Course Fee</th>
                    <th class="p-3 border border-blue-300">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr class="bg-blue-50 hover:bg-blue-100">
                        <td class="p-3 border border-blue-300 text-center">{{ $course->id }}</td>
                        <td class="p-3 border border-blue-300">{{ Str::upper($course->name) }}</td>
                        <td class="p-3 border border-blue-300">{{ $course->description }}</td>
                        <td class="p-3 border border-blue-300">{{ $course->department -> name }}</td>
                        <td class="p-3 border border-blue-300 text-center">{{ $course->duration }} years </td>
                        <td class="p-3 border border-blue-300 text-center">{{ $course->admission_fee }}</td>
                        <td class="p-3 border border-blue-300 text-center">{{ $course->course_fee }}</td>
                        <td class="p-3 border border-blue-300 text-center">
                            <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition" wire:click="editCourse({{ $course->id }})">Edit</button>
                            <button class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition ml-2" wire:click="deleteCourse({{ $course->id }})">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
