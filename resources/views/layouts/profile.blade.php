<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.head')
</head>
<body class="bg-gray-300 dark:bg-gray-900">
    
    <!-- header bar -->
    @include('layouts.main-header')

    <!--  sidebar -->
    @include('layouts.main-sidebar')

    @yield('content')

</body>
@include('layouts.footer-script')

</html>
