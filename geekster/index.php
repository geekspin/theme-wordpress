<?php get_header(); ?>
<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-md-8">
			<?php 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				new WP_Query(array('paged' => $paged)); 
				if ( have_posts() ) : 
					while ( have_posts() ) : 
						the_post();
						get_template_part('template-parts/content/content-excerpt');
					endwhile;
					the_posts_pagination();
				endif;
			?>
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>