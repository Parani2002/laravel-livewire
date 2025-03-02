<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <h1 class="text-blue-800 bold">Student Create Form</h1>
    <form  wire:submit="save"  method="post">
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" wire:model="firstname"> <br><br>
        <div>
            @error('firstname') <span class="error text-red-600">{{ $message }}</span> @enderror 
        </div>
       
        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" wire:model="lastname"><br><br>
        <div>
            @error('lastname') <span class="error text-red-600">{{ $message }}</span> @enderror 
        </div>

        <label
        for="age">Age</label>
        <input type="number" id="age" wire:model="age"><br><br>
        <div>
            @error('age') <span class="error text-red-600">{{ $message }}</span> @enderror 
        </div>

        <label for="email">Email</label>
        <input type="email" id="email" wire:model="email"><br><br>
        <div>
            @error('email') <span class="error text-red-600">{{ $message }}</span> @enderror 
        </div>

        <label for="phone">Phone</label>
        <input type="text" id="phone" wire:model="phone"><br><br>
        <div>
            @error('phone') <span class="error text-red-600">{{ $message }}</span> @enderror 
        </div>

        <label for="address">Address</label>
        <input type="text" id="address" wire:model="address"><br><br>
        <div>
            @error('address') <span class="error text-red-600">{{ $message }}</span> @enderror 
        </div>


        <label for="course">Course</label>
        <select id="course" wire:model="course">
            <option value="BSCS">Software Engineering</option>
            <option value="BSIT">Computer Science</option>
            <option value="BSIS">Artificial Intelligence</option>
        </select><br><br>
        <div>
            @error('course') <span class="error">{{ $message }}</span> @enderror 
        </div>

        <button type="submit">Create Student</button>

      
    </form>
</div>
