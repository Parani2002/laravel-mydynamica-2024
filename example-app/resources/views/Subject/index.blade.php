<x-layout>
    
    
    <main> 
    <div class="container-fluid px-4 pt-2">
        <h1 class="mt-4 text-white">Subjects</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Dashboard</a></li>
            <li class="breadcrumb-item active">Subjects</li>
        </ol>
        {{-- <div class="card mb-4">
            <div class="card-body">
                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                
            </div>
        </div> --}}
        <div class="card mb-2 border-white" style="background-color: rgb(48, 49, 50)">
            <div class="card-body">
                <table id="datatablesSimple" class="table table-dark table-hover">
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
                        
                            
                            <td><a href="{{url('subjects/'. $subject -> id)}}" type="button" class="btn btn-primary px-4 py-2 align-middle">Show</a></td>
                            
                          
                        </tr>
                            
                        @endforeach
                    </tbody>
                  
                </table>
                {{$subjects -> links()}}
                
            </div>
        </div>
    </div>
</main>



</x-layout>