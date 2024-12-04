@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Photos</h1>
        <a href="{{ route('photos.create') }}" class="btn btn-primary">Add Photo</a>
        <table class="table mt-3">
            <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($photos as $photo)
                <tr>
                    <td>{{ $photo->title }}</td>
                    <td><img src="{{ asset('storage/' . $photo->image_path) }}" alt="{{ $photo->title }}" width="100"></td>
                    <td>
                        <a href="{{ route('photos.edit', $photo) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('photos.destroy', $photo) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
