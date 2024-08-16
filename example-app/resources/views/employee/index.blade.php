<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>NIC</th>
            <th>Join Date</th>
            <th>Gender</th>
            <th>Designation</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Employee details</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{$employee -> id}}</td>
            <td>{{$employee -> first_name}}</td>
            <td>{{$employee -> last_name}}</td>
            <td>{{$employee -> date_of_birth}}</td>
            <td>{{$employee -> NIC}}</td>
            <td>{{$employee -> join_date}}</td>
            <td>{{$employee -> gender}}</td>
            <td>{{$employee -> designation}}</td>
            <td>{{$employee -> created_at }}</td>
            <td>{{$employee -> updated_at}}</td>
            <td><a href="{{url('employee/' . $employee -> id)}}">show</a></td>
        </tr>
            
        @endforeach
    </table>
</body>
</html>