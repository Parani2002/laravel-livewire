<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    @foreach ($students as $student)
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">{{ $student->name }}</h5>
                <p class="card-text">{{ $student->email }}</p>
                <p class="card-text">{{ $student->phone }}</p>
                <p class="card-text">{{ $student->address }}</p>
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                <button wire:click="delete({{ $student->id }})" class="btn btn-danger">Delete</button>
            </div>
        </div>
        
    @endforeach
</div>
