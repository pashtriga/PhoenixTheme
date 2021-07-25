<?php session_start(); ?>
<?php get_header(); ?>

<div class="container-fluid">
    <div id="wrapper-blog-post">
        <?php while(have_posts(  )) : the_post(  ); ?>
<?php         
global $wpdb;
$l=0;
$postid=get_the_id();
$user=get_current_user_id();
$row1 = $wpdb->get_results( "SELECT id FROM $wpdb->post_like_table WHERE postid = '$postid' AND userid = '$user'");
if(!empty($row1)){
$l=1;
}
$totalrow1 = $wpdb->get_results( "SELECT id FROM $wpdb->post_like_table WHERE postid = '$postid'");
$total_like1 = $wpdb->num_rows;
?>
        <div class="mt-5 col-12 col-md-7">
            <div id="breadcrumb"><?php get_breadcrumb(); ?></div>
            <h1 class=""><?php the_title(); ?></h1>
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
                    <?php echo get_comments_number() ?> <?php echo (get_comments_number()==1) ? 'comment' : 'comments' ?>
                </span>
                <span class="likes-count d-inline-block">
                    <i class="fa fa-thumbs-up"></i> 
                    <span id="like-number" ><?php echo $total_like1; ?>
                        <?php echo ($total_like1==1) ? 'like' : 'likes' ?>
                    </span>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-7">
                <img src="<?php echo get_the_post_thumbnail_url (); ?>" class="px-0 col-12">
                <div class="post-content py-3">
                    <?php the_content(); ?>
                </div>

                <?php if ( is_user_logged_in() ): ?>
                <div class="post_like">
                    <a class="pp_like <?php if($l==1) {echo "liked"; } ?>" href="#"
                        data-id="<?php echo get_the_id(); ?>">
                        
                        <i id="thumb" class="fa fa-thumbs-<?php echo ($l==1) ? 'down' : 'up' ?>"></i>
            
                    </a>
                    <span><?php echo $total_like1; ?> <?php echo ($total_like1==1) ? 'like' : 'likes' ?></span>
                </div>
                <?php endif; ?>
                <div class="text-primary my-5"><?php the_tags() ?></div>
                
                <?php if (comments_open()): 
                    comments_template();
                    if (have_comments()) : ?>
                        <ol class="post-comments">
                    <?php
                    wp_list_comments(array(
                        'style'       => 'ol',
                        'short_ping'  => true,
                    )); 
                    ?>
                        </ol>
                    <?php endif;
                    endif;
                    ?>
            </div>

            <div class="col-12 col-md-4 ml-0 ml-md-5">
                <?php get_sidebar(); ?>
            </div>
        </div>

        <?php endwhile;  ?>


        <div class="related-projects">
            <h3 class="px-5">Related Posts</h3>

            <div class="related-content px-5 row">
                <?php 
            $args = array(
                'post_type'=>'post', 
                'posts_per_page' => 3, 
                'post__not_in' => array( $post->ID  )
            );
            query_posts( $args ); 
            $related = new WP_Query($args);
            if( $related->have_posts() ) { 
            while( $related->have_posts() ) { 
	        $related->the_post();              
            ?>
                <div class="card-portfolio col col-12 col-sm-8 col-md-3 mx-sm-4">
                    <a href="<?= get_permalink();?>">
                        <?php the_post_thumbnail(array(400, 250), array('class'=>'card-img-top')); ?>
                    </a>

                    <div class="card-body">
                        <span class="blog-label">
                            <span class="fa fa-folder-open"></span>
                            <?php 
                                $categories = [];
                                foreach (get_the_category() as $category){
                                    $categories[] = $category->name;
                                }                                
                                ?>
                            <?php echo implode(', ', $categories); ?>
                        </span>

                        <h5 class="card-title mt-4"><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <a class="post-link" href="<?= get_permalink(); ?>">View post <i class="fa fa-arrow-right"
                                id="right-arrow"></i></a>
                    </div>
                </div>
                <?php  }
            wp_reset_postdata();
            } ?>

            </div>
        </div>

    </div>
</div>
<?php get_footer(); ?>