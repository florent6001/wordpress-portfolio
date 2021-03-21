@extends('layouts.app')

@section('content')
  @if (!have_posts())
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-12 text-center">
          <h1>
            La page à laquelle vous essayez d'accéder n'existe pas.
          </h1>
          <h2>
            Vous pouvez revenir à l'accueil, ou effectuez une recherche.
          </h2>
          <div class="d-flex justify-content-center mt-5">
            {!! get_search_form(false) !!}
          </div>
          <a href="" class="btn btn-primary mt-2">Revenir à l'accueil</a>
        </div>
      </div>
    </div>
  @endif
@endsection
