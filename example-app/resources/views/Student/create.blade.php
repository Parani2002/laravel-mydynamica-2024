<x-layout>
    
    <div class="p-4">
        <form action="/students" method="post">
            @csrf
            <br>
            <label for="first_name">First Name</label><br>
            <input type="text" id="first_name" name="first_name">
        <br>
        
        
            <label for="last_name" >Last Name</label>
            <input type="text" id="last_name" name="last_name">
            <br>
    
    <label for="grade_id">Grade ID</label>
    <input type="text" name="grade_id" id="grade_id">
        
            <input type="submit" value="submit">
            </form>

    </div>

</x-layout>