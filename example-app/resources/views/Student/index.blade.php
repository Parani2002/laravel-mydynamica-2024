<x-layout>
    
    
        <main> 
        <div class="container-fluid px-4 pt-4">
            {{-- <h1 class="mt-4">Tables</h1> --}}
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active">Students</li>
            </ol>
            {{-- <div class="card mb-4">
                <div class="card-body">
                    DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                    <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                    
                </div>
            </div> --}}
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
                    {{$students -> links()}}
                </div>
            </div>
        </div>
    </main>
    
    
   
</x-layout>