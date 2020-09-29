<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link href="/mycss/dashboard.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
</head>

<body>
    
        @yield('content')
    

    <script src="{{URL::asset('js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>