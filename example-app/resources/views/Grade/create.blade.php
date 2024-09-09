<x-layout>
    
    <div class="p-4 text-white">
        <form action="/grades" method="post">
            @csrf
            
            <label for="first_name">Grade Name</label><br>
            <input type="text" id="grade_name" name="grade_name">
            <br>
        
        
            <label for="grade_group" >Grade Group</label><br>
            <input type="text" id="grade_group" name="grade_group">
            <br>
    
            <label for="grade_order">Grade Order</label><br>
            <input type="text" id="grade_order" name="grade_order">
            <br>

            <label for="grade_color">Grade Order</label><br>
            <input type="text" id="grade_color" name="grade_color">
            <br>

            <input type="submit" value="submit">
            </form>

    </div>

</x-layout>