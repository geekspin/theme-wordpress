<div id="primary" class="sidebar">
    <?php do_action( 'before_sidebar' ); ?>
    <?php if ( ! dynamic_sidebar( 'sidebar-primary' ) ) : ?>
        <aside id="archives" class="widget card mb-3">
            <h5 class="widget-title card-header"><?php _e( 'Archives', 'shape' ); ?></h5>
            <div class="card-body">
                <ul>
                    <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                </ul>
            </div>
        </aside>
        <aside id="meta" class="widget card mb-3">
            <h5 class="widget-title card-header"><?php _e( 'Meta', 'shape' ); ?></h5>
            <div class="card-body">
                <ul>
                    <?php wp_register(); ?>
                    <li><?php wp_loginout(); ?></li>
                    <?php wp_meta(); ?>
                </ul>
            </div>
        </aside>
   <?php endif; ?>
</div>