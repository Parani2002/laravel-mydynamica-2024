<x-layout>
    <main>
        
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="/students">students</a></li>
                    <li class="breadcrumb-item">{{$id}}</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div style="display: flex">
                                <div class="card-body">Students</div>
                                <div class="card-body">{{$students_count}}</div>
                            </div>
                            
    
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/students">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div style="display: flex">
                                <div class="card-body">Grades</div>
                                <div class="card-body">{{$grades_count}}</div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/grades">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div style="display: flex;">
                                <div class="card-body">Subjects</div>
                                <div class="card-body">{{$subjects_count}}</div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/subjects">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Teachers</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Grade</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item active">Grade Tables</li>
                </ol>
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">{{$student -> grade-> grade_name}} Grade Details</h3>
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
                        </table>
                    </div>
                </div>
                <br>
                <br>
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Student Details</h3>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <th>Student ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                </tr>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td> {{ $student->first_name }}</td>
                                        <td>{{ $student->last_name }}</td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

</main>
</x-layout>