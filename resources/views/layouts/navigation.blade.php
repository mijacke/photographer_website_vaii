<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&family=Cardo:ital,wght@0,400;1,400&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- JS -->
    <script src="{{ asset('js/backgroundChange.js') }}"></script>
</head>
<body>
<!-- Navigation Bar -->
@include('layouts.navigation')

<!-- Page Content -->
<main>
    @yield('content')
</main>

<!-- Footer -->
<footer id="footer" class="text-center mt-5">
    <p>All content Copyright © 2024 Paulína Drahošová</p>
    <div class="social-links">
        <a href="https://www.facebook.com/paulifotografka" target="_blank">Facebook</a> |
        <a href="https://www.instagram.com/paulifotografka/" target="_blank">Instagram</a>
    </div>
    <div class="back-to-top">
        <a href="#">Back to top ↑</a>
    </div>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
