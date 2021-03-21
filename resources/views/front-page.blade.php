@extends('layouts.app')

@section('content')
  {{-- Jumbotron --}}
  <section class="jumbotron">
    <div class="container">
      <div class="row flex-column-reverse flex-md-row">
        <div class="col-md-8 pl-0">
          <h2 class="font-weight-bold h1 text-white mt-0"><?= get_theme_mod('jumbotron-title', 'Florent Vandroy') ?></h2>
          <h1 class="mb-5 h2"><?= get_theme_mod('jumbotron-headline', 'Développeur Web Freelance') ?></h1>
          <hr>
          <h3 class="lead mb-5 text-white mt-5">
            <?= get_theme_mod('jumbotron-description', 'Vous dirigez une TPE / PME et souhaitez promouvoir votre activité en ligne&nbsp;? <br>
            Je développe des sites clés en main afin de vous faire briller.') ?>
          </h3>
          <a href="<?= get_theme_mod('jumbotron-btn1-link') ?>" class="btn btn-primary"><?= get_theme_mod('jumbotron-btn1-text') ?></a>
          <a href="<?= get_theme_mod('jumbotron-btn2-link') ?>" class="btn btn-secondary"><?= get_theme_mod('jumbotron-btn2-text') ?></a>
        </div>
        <div class="col-md-4">
          <?php 
            $picture = get_theme_mod('jumbotron-picture');
          ?>
          @if($picture)
            Si picture
            <img src="<?= wp_get_attachment_url( $picture ) ?>" alt="Photo de profil Florent Vandroy" class="w-100">
          @else
            <img src="<?= get_template_directory_uri(); ?>/assets/images/profile.png" class="w-100" alt="Photo de profil Florent Vandroy">
          @endif
        </div>
      </div>
    </div>
  </section>

  {{-- Services Section --}}
  <section class="container pt-5 pb-4">
    <div class="row">
      <div class="col-md-12">
        <h2>Services.</h2>
        <p class="mb-1">Les services que je propose.</p>
      </div>
      <div class="col-md-6 d-flex py-3">
        <p class="h2 text-secondary">1.</p>
        <div class="pl-2">
          <h3 class="text-primary"><?= get_theme_mod('services1-title', 'Prise de contact') ?></h3>
          <p><?= get_theme_mod('services1-description', 'Après une prise de contact par e-mail ou par téléphone. Nous voyons ensembles vos attentes pour votre site internet.') ?></p>
        </div>
      </div>
      <div class="col-md-6 d-flex py-3">
        <p class="h2 text-secondary">2.</p>
        <div class="pl-2">
          <h3 class="text-primary"><?= get_theme_mod('services2-title', 'Développement web') ?></h3>
          <p><?= get_theme_mod('services2-description', 'Le développement du site commence en suivant l\'image de votre entreprise (couleurs, ..).') ?></p>
        </div>
      </div>
      <div class="col-md-6 d-flex py-3">
        <p class="h2 text-secondary">3.</p>
        <div class="pl-2">
          <h3 class="text-primary"><?= get_theme_mod('services3-title', 'Ajustements') ?></h3>
          <p><?= get_theme_mod('services3-description', 'Je vous présente la version développée du site et effectue des changements si besoin.') ?></p>
        </div>
      </div>
      <div class="col-md-6 d-flex py-3">
        <p class="h2 text-secondary">4.</p>
        <div class="pl-2">
          <h3 class="text-primary"><?= get_theme_mod('services4-title', 'Mise en ligne') ?></h3>
          <p><?= get_theme_mod('services4-description', 'Une fois le site vous convenant, commandez un hébergement web et je m\'occupe de la mise en ligne sur celui-ci.') ?></p>
        </div>
      </div>                  
    </div>
  </section>

  {{-- Project section --}}
  <section class="bg-dark pt-5 pb-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Projets.</h2>
          <p class="mb-1">Les derniers projets sur lesquelles j'ai intervenu.</p>
        </div>
        
        <?php
        $query = new WP_Query([
          'post_type' => 'projet',
          'order' => 'desc'
        ])
        ?> 

        @while ($query->have_posts()) @php $query->the_post() @endphp
          <div class="col-md-4 mt-4">
            @include('partials.content-'.get_post_type())
          </div>
        @endwhile
      </div>
    </div>
  </section>

  {{-- Pricing --}}
  <section class="bg-dark pt-5 pb-4">
    <div class="container">
      <div class="col-md-12">
        <h2>Tarif.</h2>
        <p class="mb-1">Voici les tarifs selon les différentes types de prestations.</p>
      </div>
      <div class="card-deck mt-5 mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Modification de site existant</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">20€ <small class="text-muted">/ heure</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Modification de pages existante</li>
              <li>Ajouts de pages</li>
              <li>Ajout de fonctionnalitées</li>
              <li>Mise en ligne</li>
            </ul>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Création d'un site vitrine</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">800€</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Développement de site WordPress</li>
              <li>Modification de thème existant</li>
              <li>Création de pages <br />
                <small>(accueil, services, blog et contact)</small>
              </li>
              <li>Mise en ligne</li>
            </ul>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Création de site sur-mesure</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Sur devis</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Créations de page</li>
              <li>Créations de fonctionnalitées</li>
              <li>Création d'un thème sur mesure</li>
              <li>Développement sur WordPress ou framework PHP <br />
              </li>
              <li>Mise en ligne</li>
            </ul>
          </div>
        </div>
      </div> 
    </div>
  </section>

  {{-- Actualités --}}
  <section class="container pt-5 pb-4">
    <div class="row">
      <div class="col-md-12">
        <h2>Actualités.</h2>
        <p class="mb-1">Les derniers articles que j'ai écris.</p>
      </div>
      
      <?php
      $query = new WP_Query([
        'post_type' => 'post',
        'order' => 'desc'
      ])
      ?> 

      @while ($query->have_posts()) @php $query->the_post() @endphp
        <div class="col-md-4 mt-4">
          @include('partials.content-'.get_post_type())
        </div>
      @endwhile
    </div>
  </section>

  <div class="d-none">
    <label>
      <span class="screen-reader-text">Rechercher&nbsp;:</span>
      <input type="search" class="search-field" placeholder="Rechercher…" value="" name="s">
    </label>
    <input type="submit" class="search-submit d-none" value="Rechercher">
  </div>

@endsection
