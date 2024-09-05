<x-layout>
    <main>
        <div class="container-fluid px-4 pt-4">

    
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="/students" class="text-decoration-none">Students</a></li>
        <li class="breadcrumb-item text-primary">{{$student -> id}}</li>

    </ol>
   
    <div class="row p-4">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-user-graduate  me-1"></i>
                    Student Information
                </div>
                <div class="card-body">
                    <div><img src="" alt=""></div>
                    <table>
                        <tr>
                            <td colspan="4">
                                <div style="width: 120px;height:120px;border-radius: 600px;background-color:aqua">
                                    <img src="{{ Vite::asset('public/assets/img/myimage.jpg') }}"  style="width:100%;height:100%;object-fit:cover" class="card-img-center" alt="{{$student->first_name}}">
                                </div>
                            </td>
                            <td style="padding-left:100px ">
                                <p>ID&emsp;&emsp;&emsp;<b>{{$student->id}}</b></p>
                                <p>Name &emsp; <b>{{$student->first_name}}{{$student->last_name}}</b></p>
                                <p>Grade  &emsp;<b>{{$student->grade->grade_name}}</p>
                            </td>
                        </tr>
                    </table>
                 </div>












                {{-- <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div> --}}
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-book-open me-1"></i>
                    Subject Information
                </div>
                <div class="card-body">
                    @if ($student -> subjects -> isEmpty())
                        <h3 class="text-center">No Data!</h3>
                    @else
                        @foreach ($student -> subjects as $subject)
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
                {{-- <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div> --}}
            </div>
        </div>
    </div>
        </div>
</main>
</x-layout>