@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Galéria Fotiek</h1>

        <!-- Tlačidlo na pridanie fotky -->
        <div class="text-end mb-4">
            <a href="{{ route('photos.create') }}" class="btn btn-success">
                <i class="fas fa-plus"></i> Nahrať novú fotku
            </a>
        </div>

        <div class="row">
            @forelse($photos as $photo)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ asset('storage/' . $photo->image_path) }}" class="card-img-top" alt="{{ $photo->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $photo->title }}</h5>
                            <p class="card-text">Pridané: {{ $photo->created_at->format('d. M Y') }}</p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('photos.edit', $photo->id) }}" class="btn btn-primary btn-sm">Upraviť</a>
                                <form action="{{ route('photos.destroy', $photo->id) }}" method="POST" onsubmit="return confirm('Naozaj chcete túto fotku vymazať?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Zmazať</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center">Žiadne fotky neboli nájdené. Nahrajte nejakú pomocou tlačidla hore.</p>
                </div>
            @endforelse
        </div>


        <!-- Pagination -->
        <div class="d-flex justify-content-center">
            {{ $photos->links() }}
        </div>

    </div>
@endsection
