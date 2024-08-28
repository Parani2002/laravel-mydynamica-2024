<x-layout>
    
    <main>
        {{-- <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active">students</li>

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
        </div> --}}
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">grades</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                
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
                            <th>Subject ID</th>
                            <th>Subject Name</th>
                            <th>Subject Order</th>
                            <th>Subject Colour</th>
                            <th>Show</th>
                         
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Subject ID</th>
                            <th>Subject Name</th>
                            <th>Subject Order</th>
                            <th>Subject Colour</th>
                            <th>Show</th>
                      
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($subjects as $subject)
                        <tr>
                            <td>{{$subject -> id}}</td>
                            <td>{{$subject -> subject_name}}</td>
                            <td>{{$subject -> subject_order}}</td>
                            <td>{{$subject -> color}}</td>
                            <td><a href="{{url('subjects/'. $subject -> id)}}">Show</a></td>
                          
                        </tr>
                            
                        @endforeach
                    </tbody>
                
                    
                </table>
            </div>
        </div>
    </div>
</main>


</x-layout>