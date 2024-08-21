
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Student Details</h1>
    <table border="2">
        <tr>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Grade Name</th>
            <th>Subject</th>
            <th>Created Date</th>
            <th>Updated Date</th>
            <th>Student Details</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{$student -> id}}</td>
            <td>{{$student -> first_name}}</td>
            <td>{{$student -> last_name}}</td>
           <td><a href="{{url('grade/'. $student -> grade_id)}}">{{$student -> grade -> grade_name}}</a></td>
          <td>
            @foreach($student -> subjects as $subject)
                {{$subject -> subject_name}},
            @endforeach
          </td>
                
            <td>{{$student -> created_at }}</td>
            <td>{{$student -> updated_at}}</td>
            <td><a href="{{url("student/" . $student -> id)}}">Show</a></td>
            
        </tr>
            
        @endforeach
    </table>

    @foreach ($students as $student)
    <tr>
        <th>{{$student -> subject_name}}</th>
    </tr>
        
    @endforeach
</body>
</html>