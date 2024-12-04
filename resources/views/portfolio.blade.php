@extends('layouts.app')

@section('content')
<section id="portfolio" class="background-section">
    <h1>Moje portfólio</h1>
    <h2 class="subheading">Každá fotka má vlastný príbeh</h2>
</section>

<!-- Portfolio Categories Section -->
<section class="container text-center mt-5">
    <div class="row align-items-stretch">
        <!-- Left column with two smaller items (Svadobné and Sezónne) -->
        <div class="col-md-6 d-flex flex-column">
            <div class="portfolio-item mb-auto">
                <img src="{{ asset('img/svadobna.jpg') }}" class="img-fluid" alt="Svadobné portfólio">
                <h3>Svadobné</h3>
                <p>THE BIG DAY</p>
            </div>
            <div class="portfolio-item mt-auto">
                <img src="{{ asset('img/sezonna.jpg') }}" class="img-fluid" alt="Sezónne portfólio">
                <h3>Sezónne</h3>
                <p>SEASONAL CELEBRATIONS</p>
            </div>
        </div>
        <!-- Right column with larger Rodinné item that spans the same height as the two left items combined -->
        <div class="col-md-6 d-flex align-items-stretch">
            <div class="portfolio-item h-100">
                <img src="{{ asset('img/portfolioRodinna.jpg') }}" class="img-fluid tall-img" alt="Rodinné portfólio">
                <h3>Rodinné</h3>
                <p>MOMENTS THAT MATTER</p>
            </div>
        </div>
    </div>
</section>

@endsection
