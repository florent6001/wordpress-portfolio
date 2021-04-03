@extends('layouts.app')

@section('content')
  {{-- Jumbotron --}}
  <section class="jumbotron mt-3" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/background-shapes.jpg ?>')" itemscope itemtype="https://schema.org/Organisation">
    <div class="container">
      <div class="row flex-column-reverse flex-md-row mb-5">
        <div class="col-md-12 text-center cd-intro">
          <p class="text-primary font-weight-bold text-lg" itemprop="slogan">Plus qu'un site, une image de marque.</p>
          <h2 class="font-weight-bold h1 text-white mt-0 my-5" itemprop="name">Florent Vandroy</h2>
          <h1 class="h2 cd-headline slide">
            Création de site web 
            <span class="cd-words-wrapper text-primary">
              <b class="is-visible">dynamique.</b>
            </span>
          </h1>
          <hr>
          <h3 class="lead mb-5 text-muted text-lg">
            Vous dirigez une TPE / PME et souhaitez promouvoir votre activité en ligne&nbsp;? <br>
            Je développe des sites clé en main afin de faire briller votre entreprise.
          </h3>
          <a href="<?= get_theme_mod('jumbotron-btn1-link') ?>" class="btn btn-primary mx-2 btn-lg"><?= get_theme_mod('jumbotron-btn1-text') ?></a>
          <a href="<?= get_theme_mod('jumbotron-btn2-link') ?>" class="btn btn-secondary mx-2 btn-lg"><?= get_theme_mod('jumbotron-btn2-text') ?></a>
        </div>
      </div>
    </div>
  </section>

  {{-- Services Section --}}
  <section class="container">
    <div class="row">
      <div class="col-md-12 text-center mb-5">
        <h2 class="title">Services.</h2>
      </div>
      <div class="col-md-6 py-3" itemscope itemtype="https://schema.org/Service">
        <div class="service">
          <p class="display-3">1.</p>
          <div class="pl-2">
            <h3 class="h4" itemprop="offers"><?= get_theme_mod('services1-title', 'Prise de contact') ?></h3>
            <p><?= get_theme_mod('services1-description', 'Après une prise de contact par e-mail ou par téléphone. Nous voyons ensembles vos attentes pour votre site internet.') ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 py-3" itemscope itemtype="https://schema.org/Service">
        <div class="service">
          <p class="display-3">2.</p>
          <div class="pl-2">
            <h3 class="h4" itemprop="offers"><?= get_theme_mod('services2-title', 'Développement web') ?></h3>
            <p><?= get_theme_mod('services2-description', 'Le développement du site commence en suivant l\'image de votre entreprise (couleurs, ..).') ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 py-3" itemtype="https://schema.org/Service">
        <div class="service">
          <p class="display-3">3.</p>
          <div class="pl-2">
            <h3 class="h4" itemprop="offers"><?= get_theme_mod('services3-title', 'Ajustements') ?></h3>
            <p><?= get_theme_mod('services3-description', 'Je vous présente la version développée du site et effectue des changements si besoin.') ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 py-3" itemscope itemtype="https://schema.org/Service">
        <div class="service">
          <p class="display-3">4.</p>
          <div class="pl-2">
            <h3 class="h4" itemprop="offers"><?= get_theme_mod('services4-title', 'Mise en ligne') ?></h3>
            <p><?= get_theme_mod('services4-description', 'Une fois le site vous convenant, commandez un hébergement web et je m\'occupe de la mise en ligne sur celui-ci.') ?></p>
          </div>
        </div>
      </div>                  
    </div>
  </section>

  {{-- Project section --}}
  <section class="bg-dark pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="title">Projets.</h2>
        </div>
        
        <?php
        $query = new WP_Query([
          'post_type' => 'projet',
          'order' => 'desc',
          'posts_per_page' => '2',
        ])
        ?> 

        @while ($query->have_posts()) @php $query->the_post() @endphp
          <div class="col-md-5 offset-md-1 mt-5">
            @include('partials.content-'.get_post_type())
          </div>
        @endwhile
      </div>
    </div>
  </section>

  {{-- Pricing --}}
  <section class="bg-dark pt-5 pb-5">
    <div class="container">
      <div class="col-md-12 text-center">
        <h2 class="title">Tarif.</h2>
      </div>
      <div class="row mt-5 mb-3">
        <div class="col-md-6" itemscope itemtype="https://schema.org/Offer">
          <div class="card mb-4 box-shadow">
            <div class="card-body">
              <h2 class="h3 my-0 font-weight-normal" itemprop="name">Modification de site existant</h2>
              <h3 class="h1 card-title pricing-card-title mt-4" itemprop="price">20€ <small class="text-muted">/ heure</small></h3>
              <ul class="list-unstyled mt-3 mb-4" itemprop="description">
                <li>- Modification de pages existante</li>
                <li>- Ajouts de pages</li>
                <li>- Ajout de fonctionnalitées</li>
                <li>- Mise en ligne</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6" itemscope itemtype="https://schema.org/Offer">
          <div class="card mb-4 box-shadow">
            <div class="card-body">
              <h2 class="h3 my-0 font-weight-normal" itemprop="name">Création d'un site vitrine</h2>
              <h3 class="h1 card-title pricing-card-title mt-4" itemprop="price">800€</h3>
              <ul class="list-unstyled mt-3 mb-4" itemprop="description">
                <li>- Développement de site WordPress</li>
                <li>- Modification de thème existant</li>
                <li>- Création de pages <small>(accueil, services, blog et contact)</small><br /></li>
                <li>- Mise en ligne</li>
              </ul>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </section>

  {{-- Actualités --}}
  <section class="container pt-5 pb-5">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="title">Actualités.</h2>
      </div>
      
      <?php
      $query = new WP_Query([
        'post_type' => 'post',
        'order' => 'desc'
      ])
      ?> 

      @while ($query->have_posts()) @php $query->the_post() @endphp
        <div class="col-md-4 mt-5">
          @include('partials.content-'.get_post_type())
        </div>
      @endwhile
    </div>
  </section>

  {{-- Contact section --}}
  <section class="bg-secondary pt-5 pb-5 mb-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="title">Contact.</h2>
          <p class="text-muted h4">
            Vous souhaitez un site internet ou avez besoin d'un développeur ?
          </p>
          <a class="btn btn-lg btn-primary mt-5 mt-5" href="<?= get_theme_mod('contact-btn-link') ?>">Me contacter</a>
        </div>
      </div>
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
