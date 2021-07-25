<?php get_header(); ?>

<?php
// Set the Current Author Variable $curauth
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
<div class="p-5">    
<div class="author-profile">
    <h2 class="mb-4"><?php echo $curauth->display_name; ?></h2>
    <div class="author-profile-card row">
        <span class="col col-12 col-md-2 col-lg-1 mr-3 avatar"><?php echo get_avatar( $curauth->user_email , '90'); ?></span>
        <div class="bio mt-4 mt-md-0">
            <p class="pl-3 pl-md-0">
                <strong>Website:</strong> <a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a><br />
                <strong>Bio:</strong> <?php echo $curauth->user_description; ?>
            </p>
        </div>
    </div>
    <div class="hr mt-4 col-12 col-md-7 col-lg-6"></div>
</div>

<div class="show-all">
    <a href="<?php echo(home_url() . '/authors') ?>" class="authors-link"><i class="fa fa-users users-icon mr-3"></i><span class="all-authors">Show all Authors</span></a>
</div>

<h2 class="mt-5">Posts by <?php echo $curauth->nickname; ?>:</h2>
 
 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="list-group mb-5 py-3 col-12">
    <a href="<?php echo the_permalink()?>"
        class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-block d-md-flex w-100 justify-content-between ">
            <small class="times-ago"><?php echo meks_time_ago() ?></small>
            <h5 class="mb-1 order-last order-md-first"><?php the_title() ?></h5>        
        </div>
        <div class="col-12 col-md-6 pl-0">
            <p class="mb-1"><?php the_excerpt() ?></p>
            <?php //the_post_thumbnail() ?>
            <img src="<?php echo get_the_post_thumbnail_url (); ?>" class="pl-0 col-12">
        </div>
    </a>
</div>
 
<?php endwhile; 
 
post_pagination(); 
 
else: ?>
<p><?php _e('No posts by this author.'); ?></p>
 
<?php endif; ?>
</div>

<?php get_footer(); ?>