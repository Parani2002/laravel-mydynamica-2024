<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
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
<body class="sb-nav-fixed" style="background-color: rgb(48, 49, 50)" >
    <x-topnav />
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <x-sidenav />
        </div>
        <div id="layoutSidenav_content" style="background-color: rgb(48, 49, 50)">
            {{$slot}}
            <x-footer/>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous')}}"></script> 
</body>
</html>
