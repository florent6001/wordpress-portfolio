<article itemscope itemtype="https://schema.org/BlogPosting">
  <a href="{!! the_permalink() !!}" itemprop="image">
    {!! the_post_thumbnail('large', array('class' => 'w-100 h-auto')) !!}
  </a>
  <div class="post">
    <h1 class="h2 mb-1" itemprop="title"><a class="text-white" href="{!! the_permalink() !!}" class="text-secondary" itemprop="url">{!! get_the_title() !!}</a></h1>
    <small class="blog-post-meta" itemprop="datePublished">Publié le {!! get_the_date() !!}</a></small>
    <p class="mt-2" itemprop="description">{!! get_the_excerpt() !!}...<p>
  </div>
</article>