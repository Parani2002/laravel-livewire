<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <h1>Student Create Form</h1>
    <form  wire:submit="save"  method="post">
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" wire:model="firstname"> <br><br>
       
        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" wire:model="lastname"><br><br>

        <label
        for="age">Age</label>
        <input type="number" id="age" wire:model="age"><br><br>

        <label for="email">Email</label>
        <input type="email" id="email" wire:model="email"><br><br>

        <label for="phone">Phone</label>
        <input type="text" id="phone" wire:model="phone"><br><br>

        <label for="address">Address</label>
        <input type="text" id="address" wire:model="address"><br><br>


        <label for="course">Course</label>
        <select id="course" wire:model="course">
            <option value="BSCS">BSCS</option>
            <option value="BSIT">BSIT</option>
            <option value="BSIS">BSIS</option>
        </select><br><br>

        <button type="submit">Create Student</button>

      
    </form>
</div>
