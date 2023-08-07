<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="../admin/css/bootstrap.min.css" rel="stylesheet" />
    

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="{{ asset ('frontend/css/bootstrap5.css') }}" rel="stylesheet">
     




</head>
<body>

    <div class="wrapper">
    @include('layouts.inc.sidebar')
        <div class="main-panel">
        @include('layouts.inc.adminnav')
        </div>
        <div class="content">
            @yeild('content')
        </div>
            @include('layouts.inc.footer')
    </div>
    <script src="{{ asset('admin/js/jquery.3.2.1.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
</body>
</html>
