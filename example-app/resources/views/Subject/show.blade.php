<x-layout>
    <main>
        <div class="container-fluid px-4 pt-2">
            <h1 class="mt-4 text-white">Grade Details</h1>

    
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="/grades" class="text-decoration-none">Grades</a></li>
        <li class="breadcrumb-item active">{{$grade -> grade_name}}</li>

    </ol>
   
    <div class="row p-4">
        <div class="col-xl-6">
            <div class="card mb-4" style="margin-left: 10px;box-shadow: 1px 1px 20px #111111 ;border-radius: 20px;background-color:#374259">
                <div class="card-header text-white">
                    <i class="fas fa-user-graduate me-2"></i>
                    <strong>Students</strong>
                </div>
                <div class="card-body" >
                    @if($grade -> students -> isEmpty())
                    <h3 style="text-align: center">No Data!</h3>
                    @endif
                        @foreach ($grade -> students as $student)
                        <div class="card mb-4" style="height:60px;margin-right: 10px10px;box-shadow: 1px 1px 20px #111111 ;border-radius: 20px;background-color:white">
                            <a href="/students/{{$student->id}}" class="student-list" style="text-decoration: none;">
                                <div class="card-body" style="padding: 4px 4px 4px 8px;">
                                    <li class="list-group-item" style="display: flex; align-items: center;">
                                        <div style="width:50px;height:50px;border-radius: 25px ;background-color: aqua;padding:2px">
                                            <img src="{{ Vite::asset('public/assets/img/myimage.jpg') }}" style="width:100%;height:100%;object-fit:cover " class="card-img-center rounded-circle" alt="{{$student->first_name}}">
                                        </div>
                                        <div style="display: inline; align-items: center;justify-content: center;margin-left: 30px;" >
                                            {{$student->first_name}} {{$student->last_name}}
                                        </div>
                                    </li>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    
                </div>

            </div>
        </div>       
        <div class="col-xl-6">
            <div class="card mb-4 rounded-4" style="background-color:#374259;box-shadow: 1px 1px 20px #111111">
                <div class="card-header text-white">
                    <i class="fas fa-book-open me-2"></i>
                    <strong>Subject Information</strong>
                </div>
                <div class="card-body">
                    @if ($grade -> subjects -> isEmpty())
                        <h3 class="text-center">No Data!</h3>
                    @else
                        @foreach ($grade -> subjects as $subject)
                        <div style="margin-right: 10px;margin-bottom:10px; box-shadow:1px 1px 20px #111111; border-radius:20px">
                            <a href="{{url('subjects/' . $subject -> id)}}" class="student-list text-decoration-none list-unstyled">
                                <div class="card-body">
                                    <li class="list group-item ">{{$subject -> subject_name}}</li>
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