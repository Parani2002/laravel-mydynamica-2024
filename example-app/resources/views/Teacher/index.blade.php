<x-layout>
    
    <main> 
    <div class="container-fluid px-4 pt-4">
        {{-- <h1 class="mt-4">Tables</h1> --}}
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Teachers</li>
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
                            <th>Teacher ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Age</th>
                            <th>Email Address</th>
                            <th>Show</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Teacher ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Age</th>
                            <th>Email Address</th>
                            <th>Show</th>
                      
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($teachers as $teacher)
                        <tr>
                            <td>{{$teacher -> id}}</td>
                            <td>{{$teacher -> firstname}}</td>
                            <td>{{$teacher -> lastname}}</td>
                            <td>{{$teacher -> age}}</td>
                            <td>{{$teacher -> emailaddress}}</td>
                           
                            
                            <td><a href="{{url('teachers/'. $teacher -> id)}}">Show</a></td>
                          
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>




</x-layout>