<x-layout>
    <main>
        <div class="container-fluid px-4 pt-4">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="/subjects">Subjects</a></li>
                <li class="breadcrumb-item">{{$subject -> subject_name}}</li>
            </ol>
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">{{$subject-> subject_name}} Grade Details</h3>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Attribute</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Subject ID</td>
                                <td>{{ $subject-> id }}</td>
                            </tr>
                            <tr>
                                <td>Subject Name</td>
                                <td>{{ $subject ? $subject-> subject_name : "No Grade Name Assigned" }}</td>
                            </tr>
                            <tr>
                                <td>Grade Order</td>
                                <td>{{ $subject-> subject_order }}</td>
                            </tr>
                          
                            <tr>
                                <td>Subject Color</td>
                                <td>{{ $subject -> subject_color !== NULL  ? $subject -> subject_color : 'No Color Present'}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Subject Details</h3>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-striped table-bordered">
                        @if ($grades ->  isEmpty())
                            <h3 class="text-center">No Grades Present</h3>
                        @else
                        <tbody>
                            <tr>
                                <th>Grade ID</th>
                                <th>Grade Name</th>
                                <th>Grade Group</th>
                                <th>Grade Order</th>
                                <th>Grade Color</th>
                            </tr>
                            @foreach ($grades as $subject)
                                <tr>
                                    <td>{{ $grade -> id }}</td>
                                    <td>{{ $grade -> grade_name }}</td>
                                    <td>{{ $grade -> grade_group }}</td>
                                    <td>{{ $grade -> grade_order }}</td>
                                    <td>{{ $grade -> grade_color }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                        @endif
                       
                    </table>
                </div>
            </div>
            <br>
            <br>
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Student Details</h3>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <th>Student ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                            </tr>
                            @foreach ($subject -> students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td> {{ $student->first_name }}</td>
                                    <td>{{ $student->last_name }}</td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</x-layout>