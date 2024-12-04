<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Photographer Portfolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts Cormorant and Cardo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&family=Cardo:ital,wght@0,400;1,400&display=swap&family=Frank+Ruhl+Libre:wght@300..900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Custom JS -->
    <script src="{{ asset('js/backgroundChange.js') }}"></script>--}}

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
                <a class="nav-link home-link" href="{{ url('/') }}">Domov</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/about-me') }}">O mne</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Full-screen Image Section -->
<section class="full-screen background-section">
    <h1>Pauli fotografka</h1>
    <h2 class="subheading">GALANTA - SLOVAKIA</h2>
</section>

<!-- Centered Text Section -->
<section id="description" class="container text-center mt-5">
    <h2 class="description-title">Zachytávam okamihy, ktoré hovoria príbehy.</h2>
    <p class="description-text">
        Fotografovanie je môj spôsob, ako zachytávať príbehy, ktoré presahujú slová. Každá fotografia uchováva okamih, spojenie,
        prchavú emóciu, ktorá by inak zmizla s časom. Verím v uchovávanie pravej krásy života, či už je to radosť zo svadby,
        teplo rodinných chvíľ, alebo žiarivosť sezónnych osláv. Mojím cieľom je zachytiť nielen tváre, ale aj pocity a premeniť
        ich na spomienky, ktoré si ľudia budú navždy vážiť.

    </p>
    <p class="description-text">
        Prostredníctvom mojej práce sa snažím rozprávať príbehy, ktoré sú intímne a autentické, zobraziť emócie a zážitky tých,
        ktorých fotím. Či už ide o zamilovaný pár, rodinu tráviacu spoločné chvíle alebo kúzlo sviatkov, každý moment, ktorý
        zachytím, je jedinečný a nenahraditeľný. Každé fotenie vnímam ako príležitosť spojiť sa, tvoriť a zvečňovať krásu,
        ktorá sa skrýva v jednoduchosti života.
    </p>
</section>

<!-- Horizontal Line -->
<hr class="divider">

<!-- Nadpis See My Work nad obrazkom -->
<section class="container text-center">
    <h2 class="section-title">Moje portfólio</h2>
</section>

<!-- Full-screen Image Section pre "See My Work" -->
<section id="see-my-work" class="container-fluid text-center">
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="work-item" id="wedding" onmouseover="changeBackground({{ asset('img/svadobna.jpg') }})">
                <h3>Svadobné</h3>
                <p>Lorem ipsum dolor</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="work-item" id="family" onmouseover="changeBackground({{ asset('img/rodinna.jpg') }}">
                <h3>Rodinné</h3>
                <p>Lorem ipsum dolor</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="work-item" id="seasonal" onmouseover="changeBackground({{ asset('img/sezonna.jpg') }}">
                <h3>Sezónne</h3>
                <p>Lorem ipsum dolor</p>
            </div>
        </div>
    </div>
</section>

<!-- Quote Section -->
<section id="quote" class="quote-section">
    <div class="quote-text">
        <h3>“Je ilúziou, že fotografie sa vytvárajú fotoaparátom... vytvárajú sa okom, srdcom a hlavou.”</h3>
        <p>– Henri Cartier-Bresson</p>
    </div>
</section>


<!-- Horizontal Line -->
<hr class="divider">

<!-- Footer -->
<footer id="footer" class="text-center">
    <p>All content Copyright © 2024 Paulína Drahošová</p>
    <div class="social-links">
        <a href="https://www.facebook.com/paulifotografka" target="_blank">Facebook</a> |
        <a href="https://www.instagram.com/paulifotografka/" target="_blank">Instagram</a>
    </div>
    <div class="back-to-top">
        <a href="{{ url('/index') }}">Back to top ↑</a>
    </div>
</footer>


<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
