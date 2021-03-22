@extends('layouts.app')

@section('content')

  <section class="container">
    <div class="row">
      <div class="col-md-8">

        @if (!have_posts())
          <div class="mt-5">
            <h1>Désolé, aucun article n'a été trouvé.</h1>
          </div>
        @endif

        <div class="mt-5 text-center">
          <h1 class="title">Actualités.</h2>
        </div>

        @while (have_posts()) @php the_post() @endphp
          <div class="mt-5">
            @include('partials.content-'.get_post_type())
          </div>
        @endwhile

        <div class="mt-4 text-center">
          {!! paginate_links() !!}
        </div>
      </div>
      <div class="col-md-4 mt-5">
        @include('partials.sidebar')
      </div>
    </div>
  </div>

@endsection
