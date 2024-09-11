<x-layout>
        <main> 
        <div class="container-fluid px-4 pt-2">
            <h1 class="mt-4 text-white">Grades</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Dashboard</a></li>
                <li class="breadcrumb-item active">Grades</li>
            </ol>
            <div class="card mb-2" style="background-color:rgb(48, 49, 50)">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Grade List
                </div>
                <div class="card-body rounded">
                    <table id="datatablesSimple" class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>Grade ID</th>
                                <th>Grade Name</th>
                                <th>Grade Group</th>
                                <th>Grade Order</th>
                                <th>Grdae Color</th>
                                <th>Show</th>
                                <th>Remove</th>
                                <th>Edit</th>
                             
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Grade ID</th>
                                <th>Grade Name</th>
                                <th>Grade Group</th>
                                <th>Grade Order</th>
                                <th>Grade Color</th>
                                <th>Show</th>
                                <th>Remove</th>
                                <th>Edit</th>
                          
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($grades as $grade)
                            <tr>
                                <td>{{$grade -> id}}</td>
                                <td>{{$grade -> grade_name}}</td>
                                <td>{{$grade -> grade_group}}</td>
                                <td>{{$grade -> grade_order}}</td>
                                <td style="background: {{$grade -> grade_color}};"></td>
                                <td><a href="{{url('grades/'. $grade -> id)}}" type="button" class="btn btn-primary px-4 py-2 align-middle">Show</a></td>
                                <td>
                                    <form action="/grades/{{$grade -> id}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <input type="submit" value="REMOVE" class="btn btn-danger px-4 py-2 align-middle" onclick="return confirm('Do you want to delete')">
                                    </form>
                                </td>
                                <td><a href="{{url('grades/'. $grade -> id . '/edit')}}" type="button" class="btn btn-secondary px-4 py-2 justify-content-center">EDIT</a></td>
                              
                            </tr>
                                
                            @endforeach
                        </tbody>
                      
                    </table>
                    {{$grades -> links()}}
                    
                </div>
            </div>
        </div>
    </main>
</x-layout>