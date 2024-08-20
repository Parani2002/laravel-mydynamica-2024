<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <table border="2">
        <h1>Designation List</h1>
        <th>ID</th>
        <th>Designation Name</th>
        <th>Department Name</th>
        <th>Salary</th>
        <th>Created At</th>
        <th>Updated At</th>
        @foreach($designations as $designation)
        <tr>
     
            <td><a href={{url('designation/'. $designation -> id)}}>{{$designation -> id}}</a></td>
            <td><a href={{url('designation/'. $designation -> id)}}>{{$designation -> designation_name}}</a></td>
            <td>{{$designation -> designation_department}}</td>
            <td>{{$designation -> salary}}</td>
            <td>{{$designation -> created_at}}</td>
            <td>{{$designation -> updated_at}}</td>
        </tr>
        @endforeach

    </table>


</body>
</html>