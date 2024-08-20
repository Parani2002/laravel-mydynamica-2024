<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Employee Details with designation ID {{$id }}</h1>
    <h3><a href="{{url('employees')}}">Employees List</a></h3>
    <table border="2">
        <th>First Name</th>
        <th>Last Name</th>
        <th>Designation ID</th>
        <th>Date Of Birth</th>
        <th>NIC Number</th>
        <th>Join Date</th>
        <th>Gender</th>
        <th>Salary</th>

        @foreach ($employees as $employee)
        <tr>
            <td>{{$employee -> first_name}}</td>
            <td>{{$employee -> last_name}}</td>
            <td>{{$employee -> designation_id}}</td>
            <td>{{$employee -> date_of_birth}}</td>
            <td>{{$employee -> NIC}}</td>
            <td>{{$employee -> join_date}}</td>
            <td>{{$employee -> gender}}</td>
            <td>{{$designation -> salary}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>