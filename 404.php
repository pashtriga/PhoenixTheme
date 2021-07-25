<?php get_header(); ?>

<div id="primary404" class="text-center d-flex justify-content-center align-items-center">
    <div id="content404" class="p-5" role="main">

        <header class="page-header">
            <h1 class="page-title"><?php _e( '404', 'phoenixx.ml' ); ?></h1>
        </header>

        <div class="page-wrapper">
            <div class="page-content">
                <p><?php _e( 'This page could not be found! Maybe try a search?', 'phoenixx.ml' ); ?></p>

                <?php get_search_form(); ?>
            </div><!-- .page-content -->
        </div><!-- .page-wrapper -->

    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>