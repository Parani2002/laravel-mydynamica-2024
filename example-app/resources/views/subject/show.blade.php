<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subject Show</title>
    <style>
        table,td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
        th{
            border: 2px solid black;
        }
        tr:nth-child(even) {
            background-color: #D6EEEE;
        }

        th, td {
            padding: 15px;
        }
    </style>
</head>
<body>
    <h1><a href="{{url('subjects')}}">Subject List</a></h1>
    <h2>Students who are taking {{$subject -> subject_name}} </h2>
    <table border="2"  style="width:100%">
        <tr>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Grade Name</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td><a href="{{url('students/' . $student -> id)}}">{{$student -> id}}</a></td>
            <td>{{$student -> first_name}}</td>
            <td>{{$student -> last_name}}</td>
            <td><a href="{{url('grades/'. $student -> grade -> id)}}">{{$student -> grade -> grade_name}}</a></td>
            <td>{{$student -> created_at}}</td>
            <td>{{$student -> updated_at}}</td>
        </tr>
        @endforeach
    </table><br>
    <h2>Grades taking {{$subject -> subject_name}}</h2>
    <table border="2"  style="width:100%">
        <th>Grade ID</th>
        <th>Grade Name</th>
        <th>Grade Order</th>
        <th>Created At</th>
        <th>Updated At</th>
        @foreach ($grades as $grade)
        <tr>
            <td><a href="{{url('grades/'. $grade -> id)}}">{{$grade -> id}}</a></td>
            <td>{{$grade -> grade_name}}</td>
            <td>{{$grade -> grade_order}}</td>
            <td>{{$grade -> created_at}}</td>
            <td>{{$grade -> updated_at}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>