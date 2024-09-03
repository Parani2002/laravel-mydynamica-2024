<x-layout>
    <main>
        
            
            <div class="container-fluid px-4 pt-4">
                {{-- <h1 class="mt-4">Student</h1> --}}
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="/teachers">Teachers</a></li>
                    <li class="breadcrumb-item">{{$teacher -> firstname . " " . $teacher -> lastname}}</li>

                </ol>
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">{{$teacher -> first_name . " " . $teacher -> last_name}} Details</h3>
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
                                        <td>Teacher ID</td>
                                        <td>{{ $teacher-> id }}</td>
                                    </tr>
                                    <tr>
                                        <td>First Name</td>
                                        <td>{{ $teacher-> firstname }}</td>
                                    </tr>
                                    <tr>
                                        <td>Last Name</td>
                                        <td>{{ $teacher -> lastname }}</td>
                                    </tr>
                                    <tr>
                                        <td>Age</td>
                                        <td>{{$teacher -> age}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email Address</td>
                                        <td>{{$teacher -> emailaddress}}</td>
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
                            @if ($teacher -> subjects -> isEmpty())
                                <h3 class="text-center">No Subjects Present</h3>
                               
                            @else
                            <tbody>
                                <tr>
                                    <th>Subject ID</th>
                                    <th>Subject Name</th>
                                    <th>Subject Order</th>
                                    <th>Subject Color</th>
                                </tr>
                                @foreach ($teacher->subjects as $subject)
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
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Subject Details</h3>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table table-striped table-bordered">
                            @if ($teacher -> grades -> isEmpty())
                                <h3 class="text-center">No Grades Present</h3>
                               
                            @else
                            <tbody>
                                <tr>
                                    <th>Grade ID</th>
                                    <th>Grade Name</th>
                                    <th>Grade Group</th>
                                    <th>Grade Order</th>
                                    <th>grade Color</th>
                                </tr>
                                @foreach ($teacher-> grades as $grade)
                                    <tr>
                                        <td>{{ $grade->id }}</td>
                                        <td>{{ $grade-> grade_name }}</td>
                                        <td>{{ $grade -> grade_group}}</td>
                                        <td>{{ $grade -> grade_order }}</td>
                                        <td>{{ $grade -> grade_color }}</td>
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