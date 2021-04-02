<article class="project" itemscope itemtype="https://schema.org/Service">
  <a itemprop="image" href="{!! the_permalink() !!}">{!! the_post_thumbnail('large', array('class' => 'w-100 h-auto')) !!}</a>
  <h2 class="h2 mt-4 mb-1">
    <a itemtype="name" class="text-white" href="{!! the_permalink() !!}" class="text-secondary">{!! get_the_title() !!}</a>
  </h2>
  <p class="mt-3" itemtype="description">{!! get_the_excerpt() !!}...<p>
  <a itemtype="url" href="{!! the_permalink() !!}" class="btn btn-primary btn-lg mt-4">Voir le projet</a>
</article>