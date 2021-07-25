<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phoenix Theme</title>
    <?php wp_head(); ?>
    <script src="https://use.fontawesome.com/6cadc76375.js"></script>
</head>

<body <?php body_class(); ?> <?php if (is_page(21)) { echo 'onload="initialize()" onunload="GUnload()"'; } ?>>

        <!-- <?php wp_nav_menu(array('theme_location'=>'primarymenu')); ?> -->

        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-light p-0">
            <a class="navbar-brand" href="<?php echo home_url('/')?>">Ekko Charity</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-light bg-light" id="navbarSupportedContent">
                <?php wp_nav_menu( array (
            'theme_location' => 'primarymenu',
            'container' => false,
            'depth' => 2,
            'walker' => new WP_Bootstrap_Navwalker(),
            'menu_class' => 'navbar-nav m-auto '
            ) ); ?>
            <?php if(!$user_ID): ?>
                <div class="butonitest m-sm-0 d-flex justify-content-center align-items-center ">
                    <a href="<?php echo (home_url().'/register')?>"> <button id="butoniNav" type="button" class="m-0 mr-lg-5 mb-2 mb-lg-0 btn btn-primary ">Join us</button></a>
                </div>
            <?php else: ?>
                <div class="butonitest m-sm-0 d-flex justify-content-center align-items-center ">
                    <a href="<?php echo (home_url().'/wp-login.php?action=logout')?>"> <button id="butoniNav" type="button" class="m-0 mr-lg-5 mb-2 mb-lg-0 btn btn-primary ">Logout</button></a>
                </div>
            <?php endif; ?>
            </div>

        </nav>
