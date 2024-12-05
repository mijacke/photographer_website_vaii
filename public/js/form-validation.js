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
        errorMessage.style.display = 'none';
    });
});
