<x-layout>
    
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="d-flex justify-content-center p-2">
                                <i class="fas fa-user-graduate px-2 " style="align-self: center;width:30px;height:50px;"></i>
                                <div class="card-body"><h3 class="text-center">Students</h3></div>
                                <div class="card-body"><h3 class="text-center">{{$count}}</h3></div>
                            </div>
                            
    
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/students">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="d-flex justify-content-center p-2">
                                <i class="fas fa-clipboard-list px-2 " style="align-self: center;width:30px;height:50px;"></i>
                                <div class="card-body"><h3 class="text-center">Grades</h3></div>
                                <div class="card-body"><h3 class="text-center">{{$grade_count}}</h3></div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/grades">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="d-flex p-2 justify-content-center">
                                <i class="fas fa-book-open px-2 " style="align-self: center;width:30px; height:50px;"></i>
                                <div class="card-body" ><h3 class="text-center">Subjects</h3></div>
                                <div class="card-body"><h3 class="text-center">{{$subject_count}}</h3></div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/subjects">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="d-flex justify-content-center p-2">
                                <i class="fa fa-users px-2 " style="align-self: center;width:30px; height:50px;"></i>
                                <div class="card-body"><h3 class="text-center">Teachers</h3></div>
                                <div class="card-body"><h3 class="text-center">{{$teacher_count}}</h3></div>

                            </div>
                            
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/teachers">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Area Chart Example
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                Bar Chart Example
                            </div>
                            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        DataTable Example
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Grade Name</th>
                                    <th>Show</th>
                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Student ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Grade Name</th>
                                    <th>Show</th>
                                    
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{$student -> id}}</td>
                                    <td>{{$student -> first_name}}</td>
                                    <td>{{$student -> last_name}}</td>
                                    <td>{{$student -> grade -> grade_name}}</td>
                                    <td><a href="{{url('students/'. $student -> id)}}">Show</a></td>
                                
                                </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </main>
    

 
    
</x-layout>