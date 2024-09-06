<x-layout>
        <main> 
        <div class="container-fluid px-4 pt-2">
            <h1 class="mt-4 text-white">Grades</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Dashboard</a></li>
                <li class="breadcrumb-item active">Grades</li>
            </ol>
            <div class="card mb-2 border-white" style="background-color:rgb(48, 49, 50)">
                {{-- <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div> --}}
                <div class="card-body rounded">
                    <table id="datatablesSimple" class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>Grade ID</th>
                                <th>Grade Name</th>
                                <th>Grade Group</th>
                                <th>Grade Order</th>
                                <th>Show</th>
                             
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Grade ID</th>
                                <th>Grade Name</th>
                                <th>Grade Group</th>
                                <th>Grade Order</th>
                                <th>Show</th>
                          
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($grades as $grade)
                            <tr>
                                <td>{{$grade -> id}}</td>
                                <td>{{$grade -> grade_name}}</td>
                                <td>{{$grade -> grade_group}}</td>
                                <td>{{$grade -> grade_order}}</td>
                                <td><a href="{{url('grades/'. $grade -> id)}}" type="button" class="btn btn-primary px-4 py-2 align-middle">Show</a></td>
                                
                              
                            </tr>
                                
                            @endforeach
                        </tbody>
                      
                    </table>
                    
                </div>
            </div>
        </div>
    </main>
</x-layout>