<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }}</title>

    {{-- Custume CSS --}}
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">

    {{-- Fontawesome CSS --}}
    <link rel="stylesheet" href="{{ asset('dist/fontawesome-free/css/all.min.css') }}" />

    {{-- Hover CSS --}}
    <link rel="stylesheet" href="{{ asset('dist/css/hover.css') }}">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=MuseoModerno:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
</head>

<body>

    @yield('content')

    <!-- Bootstrap JS, jQuery -->
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.js') }}"></script>
</body>

</html>
