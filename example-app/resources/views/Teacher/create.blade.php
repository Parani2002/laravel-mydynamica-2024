<x-layout>
    <div class="p-4 container">
        <h1>Teacher Form</h1>
        <form action="/teachers" method="post" class="d-flex flex-column">
            @csrf
            <label for="email">Email Adress</label>
            <input type="email" name="email" id="email">
    
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname">
    
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname">
    
            <label for="age">Age</label>
            <input type="number" name="age" id="age">
    
            <label for="subject">Subject</label>
            <input type="text" class="mb-4" name="subject" id="subject">
    
            <input type="submit" value="Submit">
        </form>
    </div>
    
</x-layout>