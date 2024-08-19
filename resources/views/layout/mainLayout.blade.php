<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('biodata') ? 'active' : '' }}" href="/biodata">Biodata</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('class') ? 'active' : '' }}" href="/class">Class</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('students') ? 'active' : '' }}" href="/students">Students</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
