<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <h1>Student Create Form</h1>
    <form action="/student" method="POST" wire:submit="save">
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" wire:model="firstname"> <br><br>
        @error('firstname')
        <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
        @enderror

        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" wire:model="lastname"><br><br>
        @error('lastname')
        <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
        @enderror

        <label for="age">Age</label>
        <input type="number" id="age" wire:model="age"><br><br>
        @error('age')
        <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
        @enderror

        <label for="address">Address</label>
        <input type="text" id="address" wire:model="address"><br><br>
        @error('address')
        <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
        @enderror



        <button type="submit">Submit</button>
    </form>
</div>
