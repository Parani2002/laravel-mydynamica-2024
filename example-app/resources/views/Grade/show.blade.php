<x-layout>
    <main>
        <div class="container-fluid px-4 pt-4">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="/grades">Grades</a></li>
                <li class="breadcrumb-item">{{$grade -> grade_name}}</li>
            </ol>
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">{{$grade->grade_name}} Grade Details</h3>
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
                                <td>Grade ID</td>
                                <td>{{ $grade->id }}</td>
                            </tr>
                            <tr>
                                <td>Grade Name</td>
                                <td>{{ $grade ? $grade->grade_name : "No Grade Name Assigned" }}</td>
                            </tr>
                            <tr>
                                <td>Grade Group</td>
                                <td>{{ $grade->grade_group }}</td>
                            </tr>
                            <tr>
                                <td>Grade order</td>
                                <td>{{ $grade ? $grade->grade_order : "No Order Present" }}</td>
                            </tr>
                            <tr>
                                <td>Grade Color</td>
                                <td>{{ $grade -> grade_color !== NULL  ? $grade -> grade_color : 'No Color Present'}}</td>
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
                        @if ($grade -> subjects -> isEmpty())
                            <h3 class="text-center">No Subjects Present</h3>
                        @else
                        <tbody>
                            <tr>
                                <th>Subject ID</th>
                                <th>Subject Name</th>
                                <th>Subject Order</th>
                                <th>Subject Color</th>
                            </tr>
                            @foreach ($grade->subjects as $subject)
                                <tr>
                                    <td>{{ $subject->id }}</td>
                                    <td>{{ $subject->subject_name }}</td>
                                    <td>{{ $subject->subject_order }}</td>
                                    <td>{{ $subject->subject_color }}</td>
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
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td> {{ $student->first_name }}</td>
                                    <td>{{ $student->last_name }}</td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Student Details</h3>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <th>Teacher ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Age</th>
                                <th>Email Address</th>
                            </tr>
                            @foreach ($grade -> teachers as $teacher)
                                <tr>
                                    <td>{{ $teacher -> id }}</td>
                                    <td> {{ $teacher -> firstname }}</td>
                                    <td>{{ $teacher -> lastname }}</td>
                                    <td>{{ $teacher -> age}}</td>
                                    <td>{{ $teacher -> emailaddress}}</td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</x-layout>