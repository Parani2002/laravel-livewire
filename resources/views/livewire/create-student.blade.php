<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <h1>Student Create Form</h1>
    <form action="" wire:submit="save">
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" wire:model="firstname"> <br><br>
       
        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" wire:model="lastname"><br><br>

        <input type="submit" value="Save"></input>

        <h1>Full Name: {{$fullname}}</h1>
    </form>
</div>
