@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">{{ $photo->title }}</h1>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Veľká fotka -->
                <img src="{{ asset('storage/' . $photo->image_path) }}" class="img-fluid" alt="{{ $photo->title }}">

                <div class="text-center mt-4">
                    <a href="{{ route('photos.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Späť na galériu
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
