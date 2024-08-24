<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subjects</title>
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
</head>
<body>
    <h1><a href="{{url('students')}}">Student List</a></h1>
    <h1>Subject Details</h1>
    <table border="1"  style="width:100%">
        <tr>
            <th>Subject ID</th>
            <th>Subject Name</th>
            <th>Subject Order</th>
            <th>Subject Colour</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        @foreach ($subjects as $subject)
        <tr>
            <td><a href="{{url('subjects/'. $subject -> id)}}">{{$subject -> id}}</a></td>
            <td>{{$subject -> subject_name}}</td>
            <td>{{$subject -> subject_order}}</td>
            <td>{{$subject -> subject_colour}}</td>
            <td>{{$subject -> created_at}}</td>
            <td>{{$subject -> updated_at}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>