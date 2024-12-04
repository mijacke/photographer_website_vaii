@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Photo</h1>
        <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data" id="photo-form">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control" required accept="image/*">
                <div id="error-message" class="text-danger mt-2" style="display: none;">Nie je možné pridať tento typ súboru. Prosím, vyberte obrázok (.jpeg, .png, .jpg, .gif).</div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Upload Photo</button>
        </form>
    </div>
@endsection
