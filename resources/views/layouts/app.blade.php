<!doctype html>
<html {!! get_language_attributes() !!}>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @php wp_head() @endphp
  </head>
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-primary">
        <div class="container">
          <a href="{{ home_url('/') }}" class="navbar-brand">
            <?php 
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
              $custom_logo_url = $custom_logo_data[0];
            ?>
            @if(has_custom_logo())
              <img src="<?php echo esc_url( $custom_logo_url ); ?>" alt="Logo du portfolio de Florent Vandroy" height="40">
            @else
              <img src="<?= get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo du portfolio de Florent Vandroy" height="40">
            @endif
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbar">
            @if (has_nav_menu('primary_navigation'))
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav ml-auto', 'container' => false]) !!}
            @endif
          </div>
        </div>
      </nav>
    </header>

    <main class="main">
      @yield('content')
    </main>

    @php do_action('get_footer') @endphp
    <footer class="mt-5 bg-dark py-5 text-white border-top border-secondary">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mt-4">
            <h3>A propos</h3>
            Je suis développeur web freelance sur le secteur de Bergerac, en dordogne (24). Passionnée depuis petit par l'informatique, je développe maintenant des sites web depuis environs 5 ans.
          </div>
          <div class="col-md-4 mt-4">
            <h3>Documents légaux</h3>
            @if (has_nav_menu('legal_navigation'))
              {!! wp_nav_menu(['theme_location' => 'legal_navigation', 'menu_class' => '', 'container' => false]) !!}
            @endif
          </div>
          <div class="col-md-4 mt-4">
            <h3>Recherche rapide</h3>
            {!! get_search_form(false) !!}
          </div>
          <div class="col-md-12 text-center mt-5">
            <a href="https://www.facebook.com/FlorentVandroy/" target="_blank" class="text-white px-2"><i class="fab fa-2x fa-facebook"></i></a>
            <a href="https://twitter.com/Florent_Vandroy" target="_blank" class="text-white px-2"><i class="fab fa-2x fa-twitter"></i></a>
            <a href="https://fr.linkedin.com/in/florent-vandroy" target="_blank" class="text-white px-2"><i class="fab fa-2x fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </footer>
    @php wp_footer() @endphp
  </body>
</html>
