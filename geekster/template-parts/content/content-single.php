<article class="card mb-3 border-0">
     <div class="card-body">
         <?php the_post_thumbnail('full'); ?>
         <?php the_title('<h1 class="card-title">', '</h1>'); ?>
         <?php the_content(); ?>
     </div>
     <div class="card-footer small">
         <span class="text-secondary"><?php _e('Published'); ?>:</span>
         <?php echo get_the_date(); ?>
         <?php
             the_post();
             $author_id = get_the_author_meta('ID');
             $author = get_user_by('ID', $author_id);
             rewind_posts();
         ?>
         <br />
         <span class="text-secondary"><?php _e('Author'); ?>:</span> 
         <a href="<?php echo get_author_posts_url($author_id,$author->display_name); ?>">
             <?php echo $author->display_name; ?>
         </a>
     </div>
</article>