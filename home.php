
<?php get_header(); ?>

<div class="wrapper-blog my-0 p-5 col-12 col-md-10 col-lg-8 mx-auto">

<?php  

if( have_posts() ): 
    while ( have_posts() ): the_post(); ?>
<?php 
global $wpdb;
$postid=get_the_id();
$totalrow1 = $wpdb->get_results( "SELECT id FROM $wpdb->post_like_table WHERE postid = '$postid'");
$total_like1 = $wpdb->num_rows;
?>
    <div class="posts py-5">
        <h2><a href="<?php echo the_permalink();?>"><?php the_title(); ?></a></h2>
        <div class="entry-meta py-3">
<?php
$fname = get_the_author_meta('first_name');
$lname = get_the_author_meta('last_name');
$full_name = '';

if( empty($fname)){
    $full_name = $lname;
} elseif( empty( $lname )){
    $full_name = $fname;
} else {
    $full_name = "{$fname} {$lname}";
}
if( empty($fname) && empty($lname) ){
    $full_name = get_the_author();
}
?>
            <span class="published d-inline-block"><i class="fa fa-clock-o"></i> <?php the_time('j F, Y'); ?></span>
            <span class="author d-inline-block"><i class="fa fa-keyboard-o"></i> <?php the_author_posts_link(); ?></span> 
            <span class="blog-label d-inline-block"><i class="fa fa-folder-open"></i> <?php 
                $categories = [];
                foreach (get_the_category() as $category){
                    $categories[] = $category->name;
                }                                
                ?>                        
                <?php echo implode(', ', $categories); ?> 
            </span> 
            <span class="comment-count d-inline-block">
                <i class="fa fa-comment"></i> 
                <?php echo get_comments_number()?> <?php echo (get_comments_number()==1) ? 'comment' : 'comments' ?>
            </span>
            <span class="likes-count d-inline-block">
                <i class="fa fa-thumbs-up"></i> 
                <span id="like-number" ><?php echo $total_like1; ?>
                    <?php echo ($total_like1==1) ? 'like' : 'likes' ?>
                </span>
            </span>
        </div>
        <img src="<?php echo get_the_post_thumbnail_url (); ?>" class="px-0 col-12">
        <div class="post-content py-3">
            <?php the_excerpt(); ?>
        </div>
        <a class="post-link" href="<?php echo the_permalink(); ?>">Read more</a>
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

<div class="blog-numbers d-flex justify-content-center align-items-center">
<?php post_pagination(); ?>
</div>
</div>

<?php get_footer(); ?>