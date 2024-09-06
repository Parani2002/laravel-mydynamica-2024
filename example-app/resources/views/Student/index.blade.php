<x-layout>
    
    
        <main> 
        <div class="container-fluid px-4 pt-2" >
            <h1 class="mt-4 text-white">Students</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Dashboard</a></li>
                <li class="breadcrumb-item active">Students</li>
            </ol>
            {{-- <div class="card mb-4">
                <div class="card-body">
                    DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                    <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                    
                </div>
            </div> --}}
            <div class="card mb-2 border-white" style="background-color:rgb(48, 49, 50)">
                {{-- <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div> --}}
                <div class="card-body rounded">
                    <table id="datatablesSimple" class="table table-dark table-hover">
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
                                
                                <td><a href="{{url('students/'. $student -> id)}}" type="button" class="btn btn-primary px-4 py-2 align-middle">Show</a></td>
                                
                              
                            </tr>
                                
                            @endforeach
                        </tbody>
                      
                    </table>
                    {{$students -> links()}}
                </div>
            </div>
        </div>
    </main>
    
    
   
</x-layout>