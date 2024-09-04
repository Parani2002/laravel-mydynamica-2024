<x-layout>
    <div class="d-flex justify-content-around p-4">
        
        <div>
            <h3>Student Details</h3>
            <div class="d-flex">
                <img src="{{ Vite::asset('public/assets/img/jhc_logo.png') }}" class="w-25 h-25">
                <div>
                    <table border="2">
                        <tr>
                            <th>Student ID</th>
                            <td>{{$student -> first_name}}</td>
                        </tr>
                    </table>
                </div>
            </div>
           

        </div>
        <div>
            <h3>Subject Details</h3>

        </div>
    </div>
    
</x-layout>