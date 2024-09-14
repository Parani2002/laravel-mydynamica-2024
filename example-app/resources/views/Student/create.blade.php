<x-layout>
    
    <div class="p-4 text-white">
        <form action="/students" method="post">
            @csrf
            
            <label for="first_name">First Name</label><br>
            <input type="text" id="first_name" name="first_name">
            <br>
        
        
            <label for="last_name" >Last Name</label><br>
            <input type="text" id="last_name" name="last_name">
            <br>
    
            <label for="grade_id">Grade ID</label><br>
            <select name="grade_id" id="grade_id">
                @foreach ($grades as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                @endforeach
            </select><br><br>
        
            <input type="submit" value="submit">
            </form>

    </div>

</x-layout>