@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Photo</h1>
        <form action="{{ route('photos.update', $photo) }}" method="POST" enctype="multipart/form-data" id="photo-form">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $photo->title }}" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                <small class="form-text text-muted">Vyberte nový obrázok, ak chcete zmeniť súčasný.</small>
                <div id="error-message" class="text-danger mt-2" style="display: none;">Nie je možné pridať tento typ súboru. Prosím, vyberte obrázok (.jpeg, .png, .jpg, .gif).</div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update Photo</button>
        </form>
    </div>
@endsection
