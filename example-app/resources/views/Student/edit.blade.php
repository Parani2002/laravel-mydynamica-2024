<x-layout>
    
    <div class="p-4 text-white">
        <h1>Edit Student Information</h1>
        <form action="/students/{{$student -> id}}" method="post">
            @csrf
            @method('put')

            <label for="first_name">First Name</label><br>
            <input type="text" id="first_name" name="first_name" value="{{$student -> first_name}}">
            <br>
        
        
            <label for="last_name" >Last Name</label><br>
            <input type="text" id="last_name" name="last_name" value="{{$student -> last_name}}">
            <br>
    
            <label for="grade_id">Grade ID</label><br>
            <select name="grade_id" id="grade_id">
                @foreach ($grades as $key => $value)
                    <option value="{{$key}}" {{$key == $student -> grade_id ? "selected" : ""}}>{{$value}}</option>
                @endforeach
            </select><br><br>
            <input type="submit" value="edit">
            </form>

    </div>

</x-layout>