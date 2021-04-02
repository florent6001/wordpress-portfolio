@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-8">

        <div class="mt-5">
          <h1 class="h2">Recherche.</h2>
          <p class="mb-1">Les résultats de votre recherche sont ci-dessous.</p>
        </div>

        @if (!have_posts())
          <div class="mt-5">
            <p>Désolé, aucun article n'a été trouvé.</p>
          </div>
        @endif

        @while (have_posts()) @php the_post() @endphp
          <div class="mt-5">
            @include('partials.content-'.get_post_type())
          </div>
        @endwhile

        <div class="mt-4">
          {!! paginate_links() !!}
        </div>
      </div>
      <div class="col-md-4 mt-5">
        @include('partials.sidebar')
      </div>
    </div>
  </div>

@endsection
