<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</head>
<body>
    <h1>Employee Details</h1>
    <table border="1" class="table table-striped">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Designation ID</th>
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
            <td>{{$employee -> designation_id}}</td>
            <td>{{$employee -> date_of_birth}}</td>
            <td>{{$employee -> NIC}}</td>
            <td>{{$employee -> join_date}}</td>
            <td>{{$employee -> gender}}</td>
            <td><a href={{url("designation/{$employee -> designation_id}")}}>{{$employee -> designation}}</a></td>
            <td>{{$employee -> created_at }}</td>
            <td>{{$employee -> updated_at}}</td>
            <td><a href="{{ url("employee/{$employee -> id}") }}">show</a></td>
            {{-- <td><a href="{{ url("employee/" . $employee -> id) }}">show</a></td> --}}
        </tr>
            
        @endforeach
    </table>
</body>
</html>