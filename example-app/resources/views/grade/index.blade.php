<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grades</title>
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

th, td {
  padding: 15px;
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>
<body>
    <h1>Grade Details</h1>
    <h2><a href="{{url('students')}}">Student List</a></h2>
    <table border="2"  style="width:100%">
        <th>Grade ID</th>
        <th>Grade Name</th>
        <th>Grade Order</th>
        <th>Grade Colour</th>
        <th>Grade Order</th>
        <th>Created At</th>
        <th>Updated At</th>
        @foreach ($grades as $grade)
        <tr>
            <td><a href="{{url('grade/'. $grade -> id)}}">{{$grade -> id}}</a></td>
            <td>{{$grade -> grade_name}}</td>
            <td>{{$grade -> grade_order}}</td>
            <td>{{$grade -> grade_colour}}</td>
            <td>{{$grade -> grade_order}}</td>
            <td>{{$grade -> created_at}}</td>
            <td>{{$grade -> updated_at}}</td>
        </tr>
        @endforeach
    </table>
    {{$grades -> links()}}

</body>
</html>