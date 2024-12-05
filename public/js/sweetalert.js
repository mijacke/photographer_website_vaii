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
