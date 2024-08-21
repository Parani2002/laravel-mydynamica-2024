<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Student Details</h2>
    <h1><a href="{{url('students')}}">Student List</a></h1>
   
    
    <table border="2">
        <tr>
            <th>First Name</th>
            <td>{{$student -> first_name}}</td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td>{{$student -> last_name}}</td>
        </tr>
        <tr>
            <th>Grade ID</th>
            <td>{{$student -> grade_id}}</td>
        </tr>
        <tr>
            <th>Subjects</th>
            <td>
                @foreach ($student -> subjects  as $subject)
                    {{$subject -> subject_name}}
                @endforeach
            </td>
           
        </tr>
        
      

    </table>
</body>
</html>