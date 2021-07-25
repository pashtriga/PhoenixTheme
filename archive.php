<?php get_header(); ?>


    <?php 
if( have_posts() ): while ( have_posts() ): the_post(); ?>
<div class="archive-row row mb-5 p-3 d-flex justify-content-center">
   
        <div class="list-group-item list-group-item-action flex-column align-items-start">

                <div class="d-block d-md-flex w-100 justify-content-between my-2">
                    <small class="times-ago"><?php echo meks_time_ago() ?></small>
                    <h3 class="mb-1 order-last order-md-first"><?php the_title() ?></h3>        
                </div>

                <div class="row">
                    <div class="col-md-6 pl-0">
                        <?php //the_post_thumbnail() ?>
                        <img src="<?php echo get_the_post_thumbnail_url (); ?>" class="col-12">
                    </div>
                    <div class="col-md-6 px-3 px-md-5 my-2 list-group d-flex flex-column justify-content-center">
                        <div class="hideMe archive-content">
                            <h4>Basic Info</h4>
                            <p class="mb-1 "><?php the_content() ?></p>
                            <a class="post-link" href="<?php echo the_permalink(); ?>">Read more</a>
                        </div>
                        
                    </div>
                </div>
        </div>
    
    
</div>

    <?php endwhile;
else: ?>
    <article id="post-not-found">
        <header>
            <h1>No Posts Found</h1>
        </header>
        <section>
            <p>Sorry, but no resource was found on this site.</p>
            <a href="javascript:history.go(-1)"  onMouseOver="self.status=document.referrer;return true" class="btn btn-primary">Go Back</a>
        </section>
    </article>
<?php endif; ?>

<div class="text-center"><?php post_pagination(); ?></div>

<?php get_footer(); ?>