<x-layout>
    <main>
        <div class="container-fluid px-4 ">
            <h1 class="mt-4 text-white">Student Details</h1>

    
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="/students" class="text-decoration-none">Students</a></li>
        <li class="breadcrumb-item active">{{$student -> first_name . " ". $student -> last_name}}</li>

    </ol>
   
    <div class="row p-4">
        <div class="col-xl-6">
            <div class="card mb-4" style="background-color:#374259">
                <div class="card-header text-white">
                    <i class="fas fa-user-graduate  me-1"></i>
                    <strong>Student Information</strong>
                    
                </div>
                <div class="card-body">
                    <div><img src="" alt=""></div>
                    <table>
                        <tr>
                            <td colspan="4">
                                <div style="width: 150px;height:150px;border-radius: 75px;background-color:aqua;padding:5px">
                                    <img src="{{ Vite::asset('public/assets/img/myimage.jpg') }}"  style="width:100%;height:100%;" class="card-img-center rounded-circle" alt="{{$student->first_name}}">
                                </div>
                            </td>
                            <td style="padding-left:100px" class="text-white">
                                <p>ID&emsp;&emsp;&emsp;<b>{{$student->id}}</b></p>
                                <p>Name &emsp; <b>{{$student->first_name}}{{$student->last_name}}</b></p>
                                <p>Grade  &emsp;<b>{{$student->grade->grade_name}}</p>
                            </td>
                        </tr>
                    </table>
                 </div>
            </div>
        </div>
        <div class="col-xl-6" >
            <div class="card mb-4 " style="background-color:#374259">
                <div class="card-header text-white">
                    <i class="fas fa-book-open me-1"></i>
                    <strong>Subjects</strong>
                    
                </div>
                <div class="card-body" >
                    @if ($student -> subjects -> isEmpty())
                        <h3 class="text-center">No Data!</h3>
                    @else
                        @foreach ($student -> subjects as $subject)
                        <div style="margin-right: 10px;margin-bottom:10px; box-shadow:1px 1px 20px #111111; border-radius:20px;background-color:#374259" class="student-list">
                            <a href="{{url('subjects/' . $subject -> id)}}" class="text-decoration-none list-unstyled" >
                                <div class="card-body">
                                    <li class="list group-item text-white"><strong>{{$subject -> subject_name}}</strong></li>
                                </div>
                            </a>
                        </div>
                            
                        @endforeach
                        
                    @endif
                </div>
            </div>
        </div>
    </div>
        </div>
</main>
</x-layout>