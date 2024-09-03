<x-layout>
    <main>
        
            
            <div class="container-fluid px-4 pt-4">
                {{-- <h1 class="mt-4">Student</h1> --}}
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="/students">Students</a></li>
                    <li class="breadcrumb-item">{{$student -> first_name . " " . $student -> last_name}}</li>

                </ol>
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">{{$student -> first_name . " " . $student -> last_name}} Details</h3>
                    </div>     
                        <div class="card-body">
                            <table id="datatablesSimple" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Attribute</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Student ID</td>
                                        <td>{{ $student-> id }}</td>
                                    </tr>
                                    <tr>
                                        <td>First Name</td>
                                        <td>{{ $student-> first_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Last Name</td>
                                        <td>{{ $student -> last_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Grade Name</td>
                                        <td>{{$student -> grade -> grade_name}}</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                  
                    
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Subject Details</h3>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table table-striped table-bordered">
                            @if ($student -> subjects -> isEmpty())
                                <h3 class="text-center">No Subjects Present</h3>
                               
                            @else
                            <tbody>
                                <tr>
                                    <th>Subject ID</th>
                                    <th>Subject Name</th>
                                    <th>Subject Order</th>
                                    <th>Subject Color</th>
                                </tr>
                                @foreach ($student->subjects as $subject)
                                    <tr>
                                        <td>{{ $subject->id }}</td>
                                        <td>{{ $subject->subject_name }}</td>
                                        <td>{{ $subject->subject_order }}</td>
                                        <td>{{ $subject->subject_color }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            @endif
                            
                        </table>
                    </div>
                </div>
                <br>
                <br>
            </div>

</main>
</x-layout>