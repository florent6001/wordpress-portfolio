@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-8">

        @if (!have_posts())
          <div class="mt-5">
            <h1>Désolé, aucun article n'a été trouvé.</h1>
          </div>
        @endif

        <div class="mt-5">
            <article class="post-list-item">
                {!! the_post_thumbnail('large', array('class' => 'w-100 h-100')) !!}
                <h1 class="h4 mt-3 mb-1"><a href="{!! the_permalink() !!}">{!! get_the_title() !!}</a></h1>
                <small class="blog-post-meta">Publié le {!! get_the_date() !!}</a></small>
                <p class="mt-2">{!! get_the_content() !!}<p>
            </article>
        </div>

        <div class="mt-5">
            @include('partials.comments')
        </div>

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