
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
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
        th:nth-child(even),td:nth-child(even) {
            background-color: rgba(150, 212, 212, 0.4);
        }
        th, td {
            padding: 15px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Student Details</h1>
    <table border="2" style="width:100%">
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
           <td><a href="{{url('grades/'. $student -> grade_id)}}">{{$student -> grade -> grade_name}}</a></td>
          <td>
            @foreach($student -> subjects as $subject)
                {{$subject -> subject_name}},
            @endforeach
          </td>
                
            <td>{{$student -> created_at }}</td>
            <td>{{$student -> updated_at}}</td>
            <td><a href="{{url("students/" . $student -> id)}}">Show</a></td>
            
        </tr>
            
        @endforeach
    </table>
    {{$students -> links()}}

    @foreach ($students as $student)
    <tr>
        <th>{{$student -> subject_name}}</th>
    </tr>
        
    @endforeach
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>