<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&family=Cardo:ital,wght@0,400;1,400&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
    <div class="container">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/portfolio') }}">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link home-link" href="{{ url('/index') }}">Domov</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/about-me') }}">O mne</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Full-screen Image Section -->
<section id="portfolio" class="background-section">
    <h1>Moje portfólio</h1>
    <h2 class="subheading">Každá fotka má vlastný príbeh</h2>
</section>

<!-- Portfolio Categories Section -->
<section class="container text-center mt-5">
    <div class="row align-items-stretch">
        <!-- Left column with two smaller items (Svadobné and Sezónne) -->
        <div class="col-md-6 d-flex flex-column">
            <div class="portfolio-item mb-auto">
                <img src="{{ asset('img/svadobna.jpg') }}" class="img-fluid" alt="Svadobné portfólio">
                <h3>Svadobné</h3>
                <p>THE BIG DAY</p>
            </div>
            <div class="portfolio-item mt-auto">
                <img src="{{ asset('img/sezonna.jpg') }}" class="img-fluid" alt="Sezónne portfólio">
                <h3>Sezónne</h3>
                <p>SEASONAL CELEBRATIONS</p>
            </div>
        </div>
        <!-- Right column with larger Rodinné item that spans the same height as the two left items combined -->
        <div class="col-md-6 d-flex align-items-stretch">
            <div class="portfolio-item h-100">
                <img src="{{ asset('img/portfolioRodinna.jpg') }}" class="img-fluid tall-img" alt="Rodinné portfólio">
                <h3>Rodinné</h3>
                <p>MOMENTS THAT MATTER</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer id="footer" class="text-center mt-5">
    <p>All content Copyright © 2024 Paulína Drahošová</p>
    <div class="social-links">
        <a href="https://www.facebook.com/paulifotografka" target="_blank">Facebook</a> |
        <a href="https://www.instagram.com/paulifotografka/" target="_blank">Instagram</a>
    </div>
    <div class="back-to-top">
        <a href="#portfolio">Back to top ↑</a>
    </div>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
</body>
</html>
