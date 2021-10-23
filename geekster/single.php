<?php get_header(); ?>
<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-md-8">
            <?php get_template_part('template-parts/content/content-single'); ?>
        </div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
