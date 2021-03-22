@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="row">
            <div class="col-md-12 text-center">
                <h1 class="title">Projets</h1>     
            </div>
            @while(have_posts()) @php the_post() @endphp
                <div class="col-md-4">
                    @include('partials.content-projet')
                </div>
            @endwhile
        </div>
    </div>
@endsection
