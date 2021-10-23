<article class="card mb-3 border-0 border-bottom">
  <div class="row g-0">
    <div class="col-md-4">
        <?php the_post_thumbnail('medium'); ?>
    </div>
    <div class="col-md-8">
      <div class="card-body">
		<?php the_title(sprintf('<h2 class="card-title"><a href="%s">', esc_url(get_permalink())), '</a></h2>'); ?>
        <div class="card-text">
            <?php the_excerpt(); ?>
        </div>
      </div>
    </div>
  </div>
</article>