<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <h1>Grade Details</h1>
    <h2><a href="{{url('students')}}">Student List</a></h2>
    <table border="2">
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

</body>
</html>