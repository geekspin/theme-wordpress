<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- LOGO -->
    <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
        <span class="d-block"><?php bloginfo('name'); ?></span>
        <span class="badge bg-success"><?php bloginfo('description'); ?></span>
    </a>
    <!-- /END LOGO -->
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <!-- MENU -->
        <?php 
            wp_nav_menu(array(
                'theme_location'  => 'header-menu',
                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'bs-example-navbar-collapse-1',
                'menu_class'      => 'navbar-nav mr-auto',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ));
        ?>
        <!-- /END MENU -->
        <!-- SEARCH -->	
        <?php get_template_part( 'template-parts/header/site-search' ); ?>
        <!-- /END SEARCH -->
    </div>
  </div>
</nav>