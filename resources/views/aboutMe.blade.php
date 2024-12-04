<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>O mne</title>
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
        <a class="nav-link home-link" href="{{ url('/') }}">Domov</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/about-me') }}">O mne</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Full-screen Image Section -->
<section id="about-me" class="background-section">
  <h1>Spoznaj ma o trochu viac</h1>
  <h2 class="subheading">Moje vášne, záľuby a viac</h2>
</section>

<!-- Content Section -->
<section class="container text-center mt-5">
  <div class="row align-items-center">
    <!-- Image Section -->
    <div class="col-md-5">
      <img src="{{ asset('img/aboutMePauli.jpg') }}" class="img-fluid" alt="Fotografka">
    </div>
    <!-- Text Section -->
    <div class="col-md-7 text-left">
      <h2 class="about-me-title">Paulína Drahošová</h2>
      <p class="cormorant">
        Som vášnivá fotografka z Galanty a fotografii sa venujem už od svojich trinástich rokov, čo znamená, že za objektívom
        mám viac ako desaťročie skúseností. Mám 26 rokov a aj keď fotenie robím popri mojej hlavnej práci, stále je pre mňa
        viac než len hobby – je to spôsob, ako zachytávať neopakovateľné príbehy a spomienky, ktoré vydržia celý život.
      </p>
      <p class="cormorant">
        Najradšej fotím rodiny, deti a svadby, pretože práve tieto chvíle sú plné úprimných emócií, radosti a spontánnych
        momentov, ktoré si ľudia chcú navždy zapamätať. Milujem tiež cestovanie, a preto sa vždy snažím spojiť svoje cesty
        s fotografiou. Každé nové miesto mi ponúka inšpiráciu a príležitosť zachytiť krásu okamihu inak.
      </p>
    </div>
  </div>
</section>


<!-- Footer -->
<footer id="footer" class="text-center">
  <p>All content Copyright © 2024 Paulína Drahošová</p>
  <div class="social-links">
    <a href="https://www.facebook.com/paulifotografka" target="_blank">Facebook</a> |
    <a href="https://www.instagram.com/paulifotografka/" target="_blank">Instagram</a>
  </div>
  <div class="back-to-top">
    <a href="#about-me">Back to top ↑</a>
  </div>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
</body>
</html>
