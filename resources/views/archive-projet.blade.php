@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-5">
                <h1>Projets</h1>
                <p class="mb-4">Les derniers projets sur lesquelles j'ai intervenu.</p>
                
                @while(have_posts()) @php the_post() @endphp
                    @include('partials.content-projet')
                @endwhile
            </div>

            <div class="col-md-4 mt-5">
                @include('partials.sidebar')
            </div>
        </div>
    </div>
@endsection
