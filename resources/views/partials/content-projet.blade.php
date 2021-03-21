<article class="post-list-item">
  <a href="{!! the_permalink() !!}">{!! the_post_thumbnail('large', array('class' => 'w-100 h-auto')) !!}</a>
  <h2 class="h4 mt-3 mb-1"><a href="{!! the_permalink() !!}" class="text-secondary">{!! get_the_title() !!}</a></h2>
  <small class="blog-post-meta">Publié le {!! get_the_date() !!}</a></small>
  <p class="mt-2">{!! get_the_excerpt() !!}...<p>
  <a href="{!! the_permalink() !!}" class="btn btn-primary mt-3">Voir le projet</a>
</article>