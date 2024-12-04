@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Pridajte Fotku</h1>
        <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Názov</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="image">Obrázok</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*" required onchange="previewImage(event)">
                <!-- Chybová správa pre neplatný typ súboru -->
                <small id="error-message" class="text-danger" style="display: none;">Nie je možné pridať tento typ súboru. Prosím, vyberte obrázok (.jpeg, .png, .jpg, .gif).</small>

                <!-- Zobrazenie náhľadu obrázka -->
                <div id="image-preview-container" class="mt-3" style="display: none;">
                    <img id="image-preview" src="" alt="Náhľad obrázka" class="img-fluid" style="max-width: 200px;">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Pridať Fotku</button>
        </form>
    </div>

    <script>
        // Funkcia na zobrazenie náhľadu obrázka
        function previewImage(event) {
            const file = event.target.files[0];
            const fileType = file.type;

            // Skontroluj, či je to platný obrázok
            if (fileType !== 'image/jpeg' && fileType !== 'image/png' && fileType !== 'image/jpg' && fileType !== 'image/gif') {
                // Ak nie je platný obrázok, zobrazí sa chybová správa
                document.getElementById('error-message').style.display = 'block';
                event.target.value = ''; // Vymaže výber neplatného súboru
                document.getElementById('image-preview-container').style.display = 'none'; // Skryje náhľad
            } else {
                // Ak je platný obrázok, skryje chybovú správu a ukáže náhľad
                document.getElementById('error-message').style.display = 'none';
                const reader = new FileReader();
                reader.onload = function() {
                    const output = document.getElementById('image-preview');
                    const previewContainer = document.getElementById('image-preview-container');
                    output.src = reader.result;
                    previewContainer.style.display = 'block'; // Zobrazí náhľad
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
