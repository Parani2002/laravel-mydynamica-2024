<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <td><a href="{{url('employees')}}">Employees List</a></td>
        </tr>
        <tr>
            <th>First Name</th>
            <td>{{$employee -> first_name}}</td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td>{{$employee -> last_name}}</td>
        </tr>
        <tr>
            <th>Date of Birth</th>
            <td>{{$employee -> date_of_birth}}</td>
        </tr>
        <tr>
            <th>NIC</th>
            <td>{{$employee -> NIC}}</td>
        </tr>
        <tr>
            <th>Join Date</th>
            <td>{{$employee -> join_date}}</td>
        </tr>
        <tr>
            <th>Gender</th>
            <td>{{$employee -> gender}}</td>
        </tr>
        <tr>
            <th>Designation</th>
            <td>{{$employee -> designation}}</td>
        </tr>
        <tr>
            <th>Created at</th>
            <td>{{$employee -> created_at }}</td>
        </tr>
        <tr>
            <th>Updated at</th>
            <td>{{$employee -> updated_at}}</td>
        </tr>
    </table>
</body>
</html>