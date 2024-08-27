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
            <h1 class="mt-4">Tables</h1>
            <ol class="breadcrumb mb-4">
                {{-- <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/grades">grades</a></li>
                <li class="breadcrumb-item">{{$id}}</li> --}}

            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                    <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                            Student Details
                        </div>
                    {{-- <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div> --}}
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <tr>
                                    <th>Student ID</th>
                                    <td>{{$student -> id}}</td>
                                </tr>
                                <tr>
                                    <th>First Name</th>
                                    <td>{{$student -> first_name}}</td>
                                </tr>
                                <tr>
                                    <th>Last Name</th>
                                    <td>{{$student -> last_name}}</td>
                                </tr>
                                <tr>
                                    <th>Grade Name</th>
                                    <td>{{$student -> grade -> grade_name}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
           
           
           
       
        </div>

</main>
</x-layout>