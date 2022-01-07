<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">  // Link a tailwind--}}
    <link rel="icon" type="image/png" href="/assets/logo.png">
    <!-- fonts -->
    <link href="css/styles.css" rel="stylesheet">
 
</head>
<body>



    <!-- header -->
    <!-- nav -->
    <!-- main -->
    
    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')
    
    <!-- footer -->
    <!-- script -->
    
</body>
</html>