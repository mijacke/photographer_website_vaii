@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Photo</h1>
        <form action="{{ route('photos.update', $photo) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $photo->title) }}" required>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                <small class="form-text text-muted">Nechajte prázdne, ak nechcete meniť obrázok.</small>
            </div>

            <div class="form-group">
                <label>Current Image</label>
                <div>
                    <img src="{{ asset('storage/' . $photo->image_path) }}" alt="{{ $photo->title }}" style="max-width: 200px;">
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update Photo</button>
        </form>
    </div>
@endsection
