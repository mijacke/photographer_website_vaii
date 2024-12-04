@extends('layouts.app')

@section('content')
<section id="about-me" class="background-section">
  <h1>Spoznaj ma o trochu viac</h1>
  <h2 class="subheading">Moje vášne, záľuby a viac</h2>
</section>

<!-- Content Section -->
<section class="container text-center mt-5">
  <div class="row align-items-center">
    <!-- Image Section -->
    <div class="col-md-5">
      <img src="{{ asset('img/aboutMePauli.jpg') }}" class="img-fluid" alt="Fotografka">
    </div>
    <!-- Text Section -->
    <div class="col-md-7 text-left">
      <h2 class="about-me-title">Paulína Drahošová</h2>
      <p class="cormorant">
        Som vášnivá fotografka z Galanty a fotografii sa venujem už od svojich trinástich rokov, čo znamená, že za objektívom
        mám viac ako desaťročie skúseností. Mám 26 rokov a aj keď fotenie robím popri mojej hlavnej práci, stále je pre mňa
        viac než len hobby – je to spôsob, ako zachytávať neopakovateľné príbehy a spomienky, ktoré vydržia celý život.
      </p>
      <p class="cormorant">
        Najradšej fotím rodiny, deti a svadby, pretože práve tieto chvíle sú plné úprimných emócií, radosti a spontánnych
        momentov, ktoré si ľudia chcú navždy zapamätať. Milujem tiež cestovanie, a preto sa vždy snažím spojiť svoje cesty
        s fotografiou. Každé nové miesto mi ponúka inšpiráciu a príležitosť zachytiť krásu okamihu inak.
      </p>
    </div>
  </div>
</section>

@endsection
