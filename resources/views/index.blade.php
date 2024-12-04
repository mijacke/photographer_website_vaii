@extends('layouts.app')

@section('content')
<section class="full-screen background-section">
    <h1>Pauli fotografka</h1>
    <h2 class="subheading">GALANTA - SLOVAKIA</h2>
</section>

<!-- Centered Text Section -->
<section id="description" class="container text-center mt-5">
    <h2 class="description-title">Zachytávam okamihy, ktoré hovoria príbehy.</h2>
    <p class="description-text">
        Fotografovanie je môj spôsob, ako zachytávať príbehy, ktoré presahujú slová. Každá fotografia uchováva okamih, spojenie,
        prchavú emóciu, ktorá by inak zmizla s časom. Verím v uchovávanie pravej krásy života, či už je to radosť zo svadby,
        teplo rodinných chvíľ, alebo žiarivosť sezónnych osláv. Mojím cieľom je zachytiť nielen tváre, ale aj pocity a premeniť
        ich na spomienky, ktoré si ľudia budú navždy vážiť.

    </p>
    <p class="description-text">
        Prostredníctvom mojej práce sa snažím rozprávať príbehy, ktoré sú intímne a autentické, zobraziť emócie a zážitky tých,
        ktorých fotím. Či už ide o zamilovaný pár, rodinu tráviacu spoločné chvíle alebo kúzlo sviatkov, každý moment, ktorý
        zachytím, je jedinečný a nenahraditeľný. Každé fotenie vnímam ako príležitosť spojiť sa, tvoriť a zvečňovať krásu,
        ktorá sa skrýva v jednoduchosti života.
    </p>
</section>

<!-- Horizontal Line -->
<hr class="divider">

<!-- Nadpis See My Work nad obrazkom -->
<section class="container text-center">
    <h2 class="section-title">Moje portfólio</h2>
</section>

<!-- Full-screen Image Section pre "See My Work" -->
<section id="see-my-work" class="container-fluid text-center">
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="work-item" id="wedding" onmouseover="changeBackground('{{ asset('img/svadobna.jpg') }}')">
                <h3>Svadobné</h3>
                <p>Lorem ipsum dolor</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="work-item" id="family" onmouseover="changeBackground('{{ asset('img/rodinna.jpg') }}')">
                <h3>Rodinné</h3>
                <p>Lorem ipsum dolor</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="work-item" id="seasonal" onmouseover="changeBackground('{{ asset('img/sezonna.jpg') }}')">
                <h3>Sezónne</h3>
                <p>Lorem ipsum dolor</p>
            </div>
        </div>
    </div>
</section>

<!-- Quote Section -->
<section id="quote" class="quote-section">
    <div class="quote-text">
        <h3>“Je ilúziou, že fotografie sa vytvárajú fotoaparátom... vytvárajú sa okom, srdcom a hlavou.”</h3>
        <p>– Henri Cartier-Bresson</p>
    </div>
</section>


<!-- Horizontal Line -->
<hr class="divider">

@endsection
