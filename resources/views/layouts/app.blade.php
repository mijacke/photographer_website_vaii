<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Photographer Portfolio') }}</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&family=Cardo:ital,wght@0,400;1,400&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap CSS -->

    <!-- FontAwesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">


</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
    <div class="container-fluid"> <!-- Používame fluid pre prispôsobenie -->
        <!-- Stredné odkazy (Portfolio, Domov, O mne) -->
        <ul class="navbar-nav center-nav">
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

        <!-- Pravé odkazy (Login/Dashboard/Logout) -->
        <ul class="navbar-nav right-nav">
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link">Logout</button>
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            @endauth
        </ul>
    </div>
</nav>




<!-- Main Content -->
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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- SweetAlert2 -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-button');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault(); // Zastaví štandardné správanie tlačidla
                const form = this.closest('form'); // Nájde najbližší formulár
                Swal.fire({
                    title: 'Ste si istý?',
                    text: "Túto akciu nebude možné vrátiť späť!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Áno, vymazať',
                    cancelButtonText: 'Zrušiť'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Odošle formulár, ak používateľ potvrdí akciu
                    }
                });
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('photo-form');
        const fileInput = document.getElementById('image');
        const errorMessage = document.getElementById('error-message');

        form.addEventListener('submit', function(event) {
            const file = fileInput.files[0];

            // Ak je súbor vybraný, skontrolujeme typ
            if (file) {
                const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];

                // Kontrola, či je typ súboru povolený
                if (!allowedTypes.includes(file.type)) {
                    event.preventDefault(); // Zastaví odoslanie formuláru
                    errorMessage.style.display = 'block'; // Zobrazí chybovú správu
                    fileInput.value = ''; // Vymaže výber súboru
                } else {
                    errorMessage.style.display = 'none'; // Skryje chybovú správu
                }
            }
        });

        // Skrytie chybovej správy, keď používateľ zmení súbor
        fileInput.addEventListener('change', function() {
            errorMessage.style.display = 'none'; // Skryje chybovú správu, ak používateľ zmení súbor
        });
    });

</script>
@yield('scripts')
</body>
</html>
