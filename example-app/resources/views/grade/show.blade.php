<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grade Show</title>
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
    <h2><a href="{{url('students')}}">Student List</a></h2>
    <h1>Student List on the {{$grade -> grade_name}}</h1>
    <table border="2"  style="width:100%">
        <th>Student ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Grade Name</th>
        <th>Created Date</th>
        <th>Updated Date</th>
        @foreach ($students as $student)
        <tr>
            <td><a href="{{url('student/'. $student -> id)}}">{{$student -> id}}</a></td>
            <td>{{$student -> first_name}}</td>
            <td>{{$student -> last_name}}</td>
            <td><a href="{{url('grades/' . $student -> grade -> id)}}" >{{$student -> grade -> grade_name}}</a></td>
            <td>{{$student -> created_at}}</td>
            <td>{{$student -> updated_at}}</td>
        </tr>
        @endforeach
    </table>
    <br>


    <h1>Subjects take by {{$grade -> grade_name}}</h1>
    <table border="2"  style="width:100%">
        <tr> 
            <th>Subject ID</th>
            <th>Subject Name</th>
            <th>Subject Order</th>
            <th>Subject Colour</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>  
        @foreach ($subjects as $subject)
            <tr>
                <td><a href="{{url('subjects/' . $subject -> id)}}">{{$subject -> id}}</a></td>
                <td>{{$subject -> subject_name}}</td>
                <td>{{$subject -> subject_order}}</td>
                <td>{{$subject -> subject_colour}}</td>
                <td>{{$subject -> created_at}}</td>
                <td>{{$subject -> updated_at}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>