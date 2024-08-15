<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <td><a href="{{url('students')}}">Student List</a></td>
    
    <table>
        <tr>
            <th>First Name</th>
            <td>{{$student -> first_name}}</td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td>{{$student -> last_name}}</td>
        </tr>
    </table>
</body>
</html>