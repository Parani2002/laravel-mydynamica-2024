<x-layout>
    
    <div class="p-4 text-white">
        <form action="/subjects/{{$subject -> id}}" method="post">
            @csrf
            @method('put')

            
            <label for="subject_name">Subject Name</label><br>
            <input type="text" id="subject_name" name="subject_name" value="{{$subject -> subject_name}}">
            <br>
        
        
            <label for="subject_order" >Subject Order</label><br>
            <input type="text" id="subject_order" name="subject_order" value="{{$subject -> subject_order}}">
            <br>
    
            <label for="color">Subject Color</label><br>
            <input type="text" name="color" id="color" value="{{$subject -> color}}"><br><br>
        
            <input type="submit" value="submit">
            </form>

    </div>

</x-layout>