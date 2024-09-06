<x-layout>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 text-white">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="d-flex justify-content-center p-2">
                        <i class="fas fa-user-graduate px-2 " style="align-self: center;width:30px;height:50px;"></i>
                        <div class="card-body"><h3 class="text-center">Students</h3></div>
                        <div class="card-body"><h3 class="text-center">{{$student_count}}</h3></div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{url('students')}}">View Details</a>
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
                        <a class="small text-white stretched-link" href="{{url('grades')}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="d-flex justify-content-center p-2">
                        <i class="fas fa-book-open px-2 " style="align-self: center;width:30px;height:50px;"></i>
                        <div class="card-body"><h3 class="text-center">Subjects</h3></div>
                        <div class="card-body"><h3 class="text-center">{{$subject_count}}</h3></div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{url('subjects')}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="d-flex justify-content-center p-2">
                        <i class="fas fa-users px-2 " style="align-self: center;width:30px;height:50px;"></i>
                        <div class="card-body"><h3 class="text-center">Teachers</h3></div>
                        <div class="card-body"><h3 class="text-center">100</h3></div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{url("teachers")}}">View Details</a>
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
    </div>
</main>
</x-layout>
        