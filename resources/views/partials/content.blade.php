<article>
  <a href="{!! the_permalink() !!}">
    {!! the_post_thumbnail('large', array('class' => 'w-100 h-auto')) !!}
  </a>
  <div class="post">
    <h1 class="h2 mb-1"><a class="text-white" href="{!! the_permalink() !!}" class="text-secondary">{!! get_the_title() !!}</a></h1>
    <small class="blog-post-meta">Publié le {!! get_the_date() !!}</a></small>
    <p class="mt-2">{!! get_the_excerpt() !!}...<p>
  </div>
</article>