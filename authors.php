<?php 
/*
Template Name: Display All Authors
*/

?>

<?php get_header(); ?>

        <div class="p-2 p-md-5 authors-wrapper table-responsive">
    
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col"><h3 class="my-3 authors-head">Authors</h3></th>
                    <th scope="col"><h3 class="my-3 nr-posts-head">Number of posts</h3></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach(get_users(array('who' => 'authors')) as $usr) {  $user = $usr->data; ?>

                        <tr>
                            <td>
                                <div class="row flex-nowrap d-flex flex-row authors-name">
                                    <div class="col-4 col-md-2 avatariauthor"><?php echo get_avatar($user->user_email, 50 ) ?></div>
                                    <h5 class="col-8 col-md-10 d-flex align-items-center ml-2 ml-md-0"><a href="<?php echo get_author_posts_url(false, $user->user_nicename); ?>"><?php echo $user->display_name; ?></a></h5>
                                </div>
                            </td>
                            <td> 
                                <div class="row py-2 authors-name">
                                    <h5 class="d-flex flex-column justify-content-center ml-4"><?php echo count_user_posts($user->ID); ?></h5>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
  
<?php get_footer(); ?>