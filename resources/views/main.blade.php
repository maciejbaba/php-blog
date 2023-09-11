<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<title>Main View</title>
</head>
<body>

<!-- Header Section -->
<header>
    <nav>
        <!-- Your navigation items go here -->
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/newview') }}">New View</a>
    </nav>
</header>

<!-- Content Section -->
<div class="content">
    @yield('content')
</div>

<!-- Footer Section -->
<footer>
    <p>Footer content here</p>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>