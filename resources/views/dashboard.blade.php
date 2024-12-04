@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <!-- Sekcia s uvítaním -->
        <h1>Vitaj na Dashboarde!</h1>
        <p class="lead">Spravuj svoje fotky a sleduj štatistiky aplikácie.</p>

        <!-- Klikací button na Photos -->
        <a href="{{ route('photos.index') }}" class="btn btn-primary">Prejsť na Galériu fotiek</a>

        <!-- Štatistiky alebo iné informácie -->
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">Celkový počet fotiek</div>
                    <div class="card-body">
                        <h3>{{ \App\Models\Photo::count() }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-success text-white">Nahrané fotky dnes</div>
                    <div class="card-body">
                        <h3>{{ \App\Models\Photo::whereDate('created_at', today())->count() }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-info text-white">Posledná nahratá fotka</div>
                    <div class="card-body">
                        <h3>{{ optional(\App\Models\Photo::latest()->first())->title ?? 'Žiadna fotka' }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
