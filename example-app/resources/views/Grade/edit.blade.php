<x-layout>
    
    <div class="p-4 text-white">
        <form action="/grades" method="post">
            @csrf
            
            <label for="first_name">Grade Name</label><br>
            <input type="text" id="grade_name" name="grade_name" value="{{$grade -> grade_name}}">
            <br>
        
        
            <label for="grade_group" >Grade Group</label><br>
            <input type="text" id="grade_group" name="grade_group" value="{{$grade -> grade_group}}">
            <br>
    
            <label for="grade_order">Grade Order</label><br>
            <input type="text" id="grade_order" name="grade_order" value="{{$grade -> grade_order}}">
            <br>

            <label for="grade_color">Grade Color</label><br>
            <input type="color" id="grade_color" name="grade_color" value="{{$grade -> grade_color}}">
            <br><br>

            <input type="submit" value="submit">
            </form>

    </div>

</x-layout>