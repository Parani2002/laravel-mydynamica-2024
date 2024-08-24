<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 
    'resources/js/app.js',
'public/assets/css/styles.css',
'public/assets/js/datatables-simple-demo.js',
'public/assets/js/scripts.js',
'public/assets/demo/chart-area-demo.js',
        'public/assets/demo/chart-bar-demo.js',
        'public/assets/demo/chart-pie-demo.js',
        'public/assets/demo/datatables-demo.js'])
</head>
<body>
    <div>
        {{$slot}}
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
   

    
</body>
</html>