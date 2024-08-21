<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <h1>Student List on the Same Grade</h1>
    <table border="2">
        <th>First Name</th>
        <th>Last Name</th>
        <th>Grade ID</th>
        <th>Created Date</th>
        <th>Updated Date</th>
        @foreach ($students as $student)
        <tr>
            <td>{{$student -> first_name}}</td>
            <td>{{$student -> last_name}}</td>
            <td>{{$student -> grade_id}}</td>
            <td>{{$student -> created_at}}</td>
            <td>{{$student -> updated_at}}</td>
        </tr>
        @endforeach
   
    </table>
    <br>
    <table border="2">
        <tr> 
            <th>Common Subjects</th> 
            <td>    
            @foreach ($subjects as $subject)
                {{$subject -> subject_name}}
            @endforeach
             </td>

        </tr>
    
        
      
    </table>
</body>
</html>